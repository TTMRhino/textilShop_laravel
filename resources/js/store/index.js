import Vue from "vue";
import Vuex from "vuex";
import groups from "./groups";
import items from "./items";
import cart from "./cart";


Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        groups,
        items,
        cart,
    }
})