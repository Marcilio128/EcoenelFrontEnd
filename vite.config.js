import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
            'resources/scss/reset.scss',
            'resources/scss/static.scss',
            'resources/scss/DiaAtual.scss',
            'resources/js/app.js',
            'resources/js/Grafico.js'],
            refresh: true,
        }),
    ],
});
