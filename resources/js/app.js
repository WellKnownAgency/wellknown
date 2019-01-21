
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Datatable from 'vue2-datatable-component'
Vue.use(Datatable)

import Notifications from 'vue-notification'
Vue.use(Notifications)

import SNotify from 'vue-snotify'
import 'vue-snotify/styles/material.css';
Vue.use(SNotify, {
    toast: {
        position: 'rightTop'
    }
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('leads', require('./components/Leads.vue'));
Vue.component('clients', require('./components/Clients.vue'));
Vue.component('partners', require('./components/Partners.vue'));
Vue.component('posts', require('./components/Posts.vue'));
Vue.component('categories', require('./components/Categories.vue'));
Vue.component('notifications', require('./components/Notifications.vue'));
Vue.component('settings', require('./components/Settings.vue'));
Vue.component('seo', require('./components/seo/Seo.vue'));
Vue.component('seo-edit', require('./components/seo/SeoEdit.vue'));
Vue.component('dashboard', require('./components/Dashboard.vue'));
Vue.component('calendar', require('./components/Calendar.vue'));
Vue.component('cases', require('./components/Cases.vue'));




const app = new Vue({
    el: '#app'
});
