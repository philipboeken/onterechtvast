/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./fontawesome-all');
// require("jspolyfill-array.prototype.find");
// require('es6-object-assign').polyfill();
require('./bootstrap');
require('es6-promise').polyfill();
require('trix');

import Vue from 'vue';
window.Vue = require('vue');
import Buefy from 'buefy';

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);
Vue.use(Buefy, {
  defaultIconPack: 'fa'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('account-menu', require('./components/AccountMenu.vue'));
Vue.component('counter', require('./components/Counter.vue'));
Vue.component('mobile-counter', require('./components/MobileCounter.vue'));
Vue.component('datepicker', require('./components/Datepicker.vue'));
Vue.component('payment-method', require('./components/PaymentMethod.vue'));
Vue.component('test', require('./components/Test.vue'));

const app = new Vue({
  el: '#app',
  data: {
    mobileNavIsActive: false
  }
});
