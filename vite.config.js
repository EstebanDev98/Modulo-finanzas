import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css'
            ],

            publicDirectory: 'public', // Asegura que el directorio público sea `public`
            buildDirectory: 'build', // Asegura que el subdirectorio de build sea `build`
            
            refresh: true,
        }),
    ],
});
