import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/js/app.js'],

            publicDirectory: 'public', // Asegura que el directorio público sea `public`
            buildDirectory: 'build', // Asegura que el subdirectorio de build sea `build`
            
            refresh: true,
        }),
    ],
});
