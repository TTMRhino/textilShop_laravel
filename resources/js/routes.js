import VueRouter from "vue-router";

import Home from "./components/pages/Home.vue"
import About from "./components/pages/About.vue"

export default new VueRouter({
    routes: [{
            path: '/',
            component: Home,
            name: 'home',
        },
        {
            path: '/about',
            component: About,
            name: 'about',
        },
        /* {
             path: '/contacts',
             component: Contacts,
             name: 'contacts'
         },
         {
             path: '/shop',
             component: Shop,
             name: 'shop'
         },
         {
             path: '/detail/:id',
             name: "detail",
             component: Detail
         },
         {
             path: '/cart',
             name: "cart",
             component: Cart
         },
         {
             path: '/checkout',
             name: "checkout",
             component: Checkout
         },
         {
             path: '/orderdone',
             name: "orderdone",
             component: Orderdone
         }*/
    ],
    mode: 'history'
})