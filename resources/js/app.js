/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import axios from 'axios';
// import VueRouter from 'vue-router';
// Vue.use(VueRouter);
//
// import VueAxios from 'vue-axios';
// Vue.use(VueAxios, axios);




// Vue.use(VueAxios, axios);
// import UserForm from './components/UserForm.vue';
//
// const routes = [
//     {
//         name: 'create',
//         path: '/',
//         component: UserForm
//     }
//
//     ]

// const router = new VueRouter({ mode: 'history', routes: routes});
// const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/App.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('user-form', require('./components/UserForm.vue').default);
Vue.component('all-users', require('./components/AllUsers.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import swal from 'sweetalert2';
window.swal = swal;
window.Fire = new Vue();
const app = new Vue({
    el: '#app',

});

