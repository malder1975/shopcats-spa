
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let AppHeader = require('./components/AppHeader.vue');
let AppFooter = require('./components/AppFooter.vue');

let Home = require('./components/Home.vue');
let About = require('./components/About.vue');
//Vue.component('example', require('./components/Example.vue'));

const routes = [
    { path: '/home', component: Home },
    { path: '/about', component: About }
]

const router = new VueRouter({
    routes // сокращение от `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    components:{AppHeader, AppFooter}
});
