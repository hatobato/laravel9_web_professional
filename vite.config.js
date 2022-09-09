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
        }),
    ],
    server: {
        // 以下のパラメータを指定しないとapp.css, app.jsのURLが0.0.0.0になってしまうため、明示的にlocalhostに変更
        hmr: {
            host: 'localhost'
        },
        // Windowsアプリでファイル編集した際に監視されない問題があるため、usePolling:trueにすることで監視を強制させる
        // https://vitejs.dev/config/server-options.html#server-watch
        watch: {
            usePolling: true
        }
    }
});
