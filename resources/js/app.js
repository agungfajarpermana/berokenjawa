require('./bootstrap');
window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
import NavbarComponent from './components/NavbarComponent.vue';

const app = new Vue({
    el: '#app',
    components: {
        NavbarComponent
    },
    mounted() {
        console.log('Component mounted.')
    }
});
