
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.axios = require('axios'); 

window.chartjs = require('chart.js'); 
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Drop Down Components 
Vue.component('location-dropdown', require('./components/DropDowns/Location.vue'));
Vue.component('club-dropdown', require('./components/DropDowns/Club.vue'));
Vue.component('status-dropdown', require('./components/DropDowns/Status.vue'));

// Settings Components 
Vue.component('about-settings', require('./components/Settings/About.vue'));

// Numeric Inputs 
Vue.component('win-input', require('./components/Inputs/NumericInput/Win.vue'));
Vue.component('lose-input', require('./components/Inputs/NumericInput/Lose.vue'));

const app = new Vue({
    el: '#app'
});
