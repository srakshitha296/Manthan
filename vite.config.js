import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            valetTls: false, // Explicitly disable Valet TLS configuration
        }),
    ],
    server: {
        host: '127.0.0.1',
        port: 5173,
        strictPort: true, // Ensures port conflicts are caught early
    },
});
