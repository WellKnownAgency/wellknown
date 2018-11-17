
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('leads', require('./components/Leads.vue'));
Vue.component('clients', require('./components/Clients.vue'));
Vue.component('posts', require('./components/Posts.vue'));
Vue.component('categories', require('./components/Categories.vue'));
Vue.component('notifications', require('./components/Notifications.vue'));
Vue.component('settings', require('./components/Settings.vue'));
Vue.component('seo', require('./components/Seo.vue'));

Vue.component('example-component', require('./components/ExampleComponent.vue'));



const app = new Vue({
    el: '#app'
});
