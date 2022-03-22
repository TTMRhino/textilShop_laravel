import VueRouter from "vue-router";

import Home from "./components/pages/Home.vue"
import About from "./components/pages/About.vue"
import Shop from "./components/pages/Shop.vue"
import Detail from "./components/pages/Detail.vue"
import Contact from "./components/pages/Contact.vue"
import Cart from "./components/pages/Cart.vue"
import Checkout from "./components/pages/Checkout.vue"

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
        {
            path: '/shop/:search',
            component: Shop,
            name: 'shop'
        },
        {
            path: '/detail/:id',
            name: "detail",
            component: Detail
        },
        {
            path: '/contact',
            component: Contact,
            name: 'contact'
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
        /*
                        {
                            path: '/orderdone',
                            name: "orderdone",
                            component: Orderdone
                        }*/
    ],
    mode: 'history'
})