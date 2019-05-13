require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Sidebar from "./components/layouts/Sidebar.vue"
import Home from "./components/layouts/Home.vue"
import Users from "./components/users/Index.vue"

const router = new VueRouter({
  routes: [
        { path: '/users', component: Users },
        { path: '/admin/dashboard', component: Home },
    ] 
})


const app = new Vue({
    el: '#app',
    router,
    data: {
        message: "heee"
    }
});

const admin_app = new Vue({
    el: '#admin_app',
    router,
    data: {
        message: "hello world"
    },
    components: {Sidebar}
});
