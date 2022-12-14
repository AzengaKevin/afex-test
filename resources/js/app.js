import { createApp, h } from 'vue'
import * as boostrap from 'bootstrap';
import { createInertiaApp } from '@inertiajs/inertia-vue3'

window.bootstrap = boostrap;

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})