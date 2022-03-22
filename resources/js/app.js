require('./bootstrap');

import Vue from 'vue';
import App from "./components/App.vue"
import VueRouter from 'vue-router'
import router from "./routes"
import VueResource from 'vue-resource'
import store from "./store"
import Vuelidate from 'vuelidate'






Vue.use(VueRouter)
Vue.use(VueResource)
Vue.use(Vuelidate)


export const eventEmitter = new Vue()

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    store,
    VueResource
});