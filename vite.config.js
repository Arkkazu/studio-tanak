import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import fg from "fast-glob";
import path from "node:path";

export default defineConfig(({ mode }) => {
  /* ─── JSエントリ収集 ─── */
  const jsPatterns = ["./src/js/archive-*.js", "./src/js/single-*.js", "./src/js/page-*.js", "./src/js/front-*.js"];

  const jsFiles = fg.sync(jsPatterns, { onlyFiles: true });

  const entries = Object.fromEntries(jsFiles.map((f) => [path.basename(f, ".js"), f]));

  /* ─── CSSエントリ収集 ─── */
  const cssPatterns = ["./src/css/archive-*.css", "./src/css/single-*.css", "./src/css/page-*.css", "./src/css/front-*.css"];

  const cssFiles = fg.sync(cssPatterns, { onlyFiles: true });

  cssFiles.forEach((f) => {
    const name = path.basename(f, ".css");

    entries[`${name}-style`] = f;
  });

  /* ─── 共通エントリを追加 ─── */
  entries.main = "./src/main.js";
  entries.style = "./src/style.css";

  return {
    base: mode === "development" ? "/" : "/wp-content/themes/studio-tanak_theme/dist/",
    plugins: [tailwindcss()],
    server: {
      host: "localhost",
      port: 5173,
      cors: true,
    },
    build: {
      outDir: "dist",
      rollupOptions: {
        input: entries,
        output: {
          entryFileNames: "assets/[name].js",
          chunkFileNames: "assets/[name].js",
          assetFileNames: "assets/[name].[ext]",
        },
      },
    },
  };
});
