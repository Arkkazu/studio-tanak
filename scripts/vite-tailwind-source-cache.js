import fs from "node:fs/promises";
import { readFileSync, mkdirSync, writeFileSync, rmSync } from "node:fs";
import path from "node:path";
import fg from "fast-glob";

// Docker's node_modules is a Linux volume; the theme itself is a Windows bind mount.
// Mirror only class-bearing sources so Tailwind does not stat that mount on every save.
const patterns = ["*.php", "index.html", "inc/**/*.php", "template-parts/**/*.php", "src/**/*.js"];

export function tailwindSourceCache(enabled) {
  let root;
  let cache;
  let server;
  const sources = new Set();

  function relativeSource(file) {
    const relative = path.relative(root, file).replaceAll("\\", "/");
    if (relative.startsWith("../") || path.isAbsolute(relative)) return null;
    return /^(?:[^/]+\.php|index\.html|(?:inc|template-parts)\/.*\.php|src\/.*\.js)$/.test(relative)
      ? relative
      : null;
  }

  async function sync(file, relative) {
    const destination = path.join(cache, relative);
    try {
      // A single small source read must not queue behind polling stat operations.
      const content = readFileSync(file);
      mkdirSync(path.dirname(destination), { recursive: true });
      writeFileSync(destination, content);
      sources.add(file);
    } catch (error) {
      if (error.code !== "ENOENT") throw error;
      rmSync(destination, { force: true });
      sources.delete(file);
    }
  }

  async function update(file) {
    const relative = relativeSource(file);
    if (!relative) return false;
    await sync(file, relative);
    const css = server.environments.client.moduleGraph.getModulesByFile(path.join(root, "src/style.css"));
    for (const module of css ?? []) server.environments.client.moduleGraph.invalidateModule(module);
    server.ws.send({ type: "full-reload", path: "*" });
    return true;
  }

  return {
    name: "theme-tailwind-source-cache",
    apply: "serve",
    enforce: "pre",
    async configResolved(config) {
      if (!enabled) return;
      root = config.root;
      // Fresh cache per server instance: deleted/renamed templates cannot leave stale classes.
      cache = await fs.mkdtemp(path.join(root, "node_modules/.theme-tailwind-"));
      const files = await fg(patterns, { cwd: root, absolute: true, onlyFiles: true });
      await Promise.all(files.map((file) => sync(file, relativeSource(file))));
    },
    configureServer(vite) {
      if (!enabled) return;
      server = vite;
      server.watcher.add([...sources]);
      // change events are awaited by hotUpdate; new/deleted files have no module yet.
      for (const event of ["add", "unlink"]) {
        server.watcher.on(event, (file) => {
          update(file).catch((error) => server.config.logger.error(error.stack));
        });
      }
    },
    transform: {
      filter: { id: /\/src\/style\.css(?:\?.*)?$/ },
      handler(code) {
        if (!enabled) return;
        const sourcePath = cache.replaceAll("\\", "/");
        return code.replace(/^@source .*;\r?\n/gm, "") + `\n@source "${sourcePath}/**/*";\n`;
      },
    },
    async hotUpdate({ file }) {
      if (!enabled || this.environment.name !== "client") return;
      if (await update(file)) return [];
    },
    async closeBundle() {
      if (cache) await fs.rm(cache, { recursive: true, force: true });
    },
  };
}
