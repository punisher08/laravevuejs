
const { default: axios } = require('axios');
require('./bootstrap');
//Plugins
import Vue from 'vue';
import Vuetify from '../plugins/vuetify'; // path to vuetify export
import router from './router';
//window load
window.Vue = require('vue').default;
window.axios = require('axios');
//Components using default
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('news-component', require('./components/newscomponent.vue').default);
Vue.component('sidebar-component', require('./components/SidebarComponent.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
import Dashboard from './components/Dashboard';
import Cruds from './components/cruds/create';

const app = new Vue({
    vuetify: Vuetify,
    router,
    el: '#app',
    components:{
        Dashboard,
        Cruds
    

    }
   

});
