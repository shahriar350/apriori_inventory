require('./bootstrap');

window.Vue = require('vue');
//packages start
import { BootstrapVue } from 'bootstrap-vue'
Vue.use(BootstrapVue)

//packages end


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
