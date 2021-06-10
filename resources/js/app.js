
const { default: axios } = require('axios');
require('./bootstrap');
//Plugins
import Vue from 'vue';
import Vuetify from '../plugins/vuetify'; // path to vuetify export
import router from './router';
//window load
window.Vue = require('vue').default;
window.axios = require('axios');

import Sidebar from './components/pages/SidebarComponent';

const app = new Vue({
    vuetify: Vuetify,
    router,
    el: '#app',
    components:{
        Sidebar,
    }
   

});
