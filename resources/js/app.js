/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//import Vue from 'vue';
window.Vue = require('vue').default;
Vue.component('app', require('./components/App.vue').default);
//Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const App = new Vue({
    el: '#app',
});