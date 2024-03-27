import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/home.css', 'resources/js/home.js'],
            input: ['resources/css/root.css', 'resources/js/root.js'],
            input: ['resources/css/vehicle-info.css', 'resources/js/vehicle-info.js'],
            input: ['resources/css/stock.css', 'resources/js/stock.js'],
            refresh: true,
        }),
    ],
});