import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import fg from "fast-glob";
import path from "node:path";
import { tailwindSourceCache } from "./scripts/vite-tailwind-source-cache.js";

export default defineConfig(({ mode }) => {
  const wordpressProxyTarget = process.env.VITE_WP_PROXY_TARGET;
  const hmrHost = process.env.VITE_HMR_HOST;
  const usePolling = process.env.CHOKIDAR_USEPOLLING === "true";

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

  entries.main = "./src/main.js";
  entries.style = "./src/style.css";

  return {
    base: mode === "development" ? "/" : "/wp-content/themes/studio-tanak_theme/dist/",
    plugins: [tailwindSourceCache(usePolling && Boolean(wordpressProxyTarget)), tailwindcss()],
    server: {
      host: wordpressProxyTarget ? "0.0.0.0" : "localhost",
      port: 5173,
      strictPort: true,
      cors: true,
      allowedHosts: hmrHost ? [hmrHost] : undefined,
      origin: hmrHost ? `http://${hmrHost}` : undefined,
      watch: {
        usePolling,
        interval: usePolling ? Math.max(500, Number(process.env.CHOKIDAR_INTERVAL || 1000)) : undefined,
        binaryInterval: usePolling ? 2000 : undefined,
        ignored: ["**/media/**", "**/dist/**", "**/MyBrain/**", "**/tmp/**", "**/.coding-gate/**", "**/*.log"],
      },
      hmr: hmrHost
        ? {
            host: hmrHost,
            clientPort: Number(process.env.VITE_HMR_CLIENT_PORT || 80),
            protocol: "ws",
          }
        : undefined,
      proxy: wordpressProxyTarget
        ? {
            "/": {
              target: wordpressProxyTarget,
              changeOrigin: false,
              bypass(req) {
                const vitePaths = ["/@vite/", "/@id/", "/@fs/", "/@react-refresh", "/src/", "/node_modules/"];

                if (vitePaths.some((vitePath) => req.url.startsWith(vitePath))) {
                  return req.url;
                }
              },
              configure(proxy) {
                proxy.on("proxyReq", (proxyReq) => {
                  proxyReq.setHeader("X-Studio-Tanaka-Vite", "1");
                });
              },
            },
          }
        : undefined,
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
