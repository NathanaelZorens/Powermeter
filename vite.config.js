import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    // Mengirim perintah reload penuh ke klien WebSocket
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    server: {
        // Menyesuaikan root directory agar plugin blade menargetkan ke views
        fs: {
            strict: false,
            // Mengubah root directory ke "resources/views"
            // Ini akan memungkinkan plugin Laravel untuk mengawasi perubahan pada file Blade
            root: 'resources/views',
        }
    }
});