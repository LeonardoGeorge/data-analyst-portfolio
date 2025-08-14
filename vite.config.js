import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'vite-plugin-glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/neon.css',
                'resources/js/neon-effects.js'
            ],
            refresh: true,
        }),
        glob(),
    ],
});