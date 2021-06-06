/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: axios } = require('axios');

require('./bootstrap');
// import Vuetify from '../plugins/vuetify';
import Vue from 'vue';
import Vuetify from '../plugins/vuetify'; // path to vuetify export
import VueRouter from '../plugins/vue-router'; // path to vue-router export
window.Vue = require('vue').default;
window.axios = require('axios');


//Components using default
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('news-component', require('./components/newscomponent.vue').default);
Vue.component('sidebar-component', require('./components/SidebarComponent.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
// Vue.component('dashboard-component', require('./components/Dashboard.vue').default);
//Components using import
import Dashboard from './components/Dashboard';



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: Vuetify,
    vuerouter: VueRouter,
    el: '#app',
    components:{
        Dashboard
    },
    mounted(){
        console.log(VueRouter)
    }
});
