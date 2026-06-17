import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/portfolio.scss',
                'resources/sass/janus-bee.scss',
                'resources/sass/lugh-owl.scss',
                'resources/sass/gaia-deer.scss',
                'resources/sass/ouranos-taurus.scss',
                'resources/sass/zeus-bug.scss',
                'resources/sass/bragi-bird.scss',
                'resources/sass/inari-fox.scss',
                'resources/sass/admin.scss',
                'resources/js/app.js',
                'resources/js/lugh-owl.js',
                'resources/js/gaia-deer.js',
                'resources/js/ouranos-taurus.js',
                'resources/js/zeus-bug.js',
                'resources/js/bragi-bird.js',
                'resources/js/inari-fox.js',
                'resources/js/inari-fox-admin.js',
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
