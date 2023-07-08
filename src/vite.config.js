import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/scss/app.scss",
                "resources/scss/contact.scss",
                "resources/ts/load.ts",
            ],
            refresh: true,
        }),
    ],
});
