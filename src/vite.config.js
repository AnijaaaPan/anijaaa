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
                "resources/scss/app.scss",
                "resources/scss/about.scss",
                "resources/scss/contact.scss",
                "resources/scss/works.scss",
                "resources/scss/work.scss",
            ],
            refresh: true,
        }),
    ],
});
