import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import {createNotivue} from "notivue";
import "notivue/notifications.css" // Only needed if using built-in notifications
import "notivue/animations.css" // Only needed if using built-in animations

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(createNotivue, {
                position: "top-right",
                notifications: {
                    global: {
                        duration: 5000
                    },
                    success: {
                        title: 'Berhasil'
                    },
                    error: {
                        title: 'Gagal'
                    },
                },
            })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
