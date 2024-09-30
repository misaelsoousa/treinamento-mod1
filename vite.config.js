import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/styles.scss', 'resources/js/app.js', 'resources/assets/fonts/newRepublic.ttf'],
            refresh: true,
        }),
    ],
    base: ''
});
