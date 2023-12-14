import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                "resources/css/style.css",
                "resources/css/liveteaching.css",
                "resources/css/learning.css",
                "resources/css/forum.css",
                "resources/css/homepage.css",
                'resources/js/app.js',
                "resources/js/animation.js"
            ],
            refresh: true,
        }),
    ],
});