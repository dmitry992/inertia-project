import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import './font-awesome.js';
import 'startup-ui/dist/index.css';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

createInertiaApp({
    resolve: name => resolvePageComponent(
        `../views/pages/${name}.vue`,
        import.meta.glob('../views/pages/**/*.vue')
    ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('Link', Link)
            .component('Head', Head)
            .component('font-awesome-icon', FontAwesomeIcon)
            .mount(el);
    },
});
