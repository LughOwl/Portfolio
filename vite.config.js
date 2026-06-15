import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/portfolio.scss',
                'resources/sass/janus-bee.scss',
                'resources/sass/lugh-owl.scss',
                'resources/sass/admin.scss',
                'resources/js/app.js',
                'resources/js/lugh-owl.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
