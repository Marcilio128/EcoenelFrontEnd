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
            'resources/js/Grafico.js',
            'resources/js/animate.js',
            'resources/js/StaticScript.js',
            'resources/scss/flipnumber.scss'],
            refresh: true,
        }),
    ],
});
