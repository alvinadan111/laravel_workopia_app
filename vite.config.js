import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // server: {
    //     https: false,
    //     host: "laravelfromscratch.test",
    //     port: 5173,
    //     strictPort: true,
    //     hmr: {
    //         protocol: "wss",
    //         host: "laravelfromscratch.test",
    //         port: 5173,
    //     },
    // },
});
