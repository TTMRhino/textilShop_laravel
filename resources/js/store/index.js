import Vue from "vue";
import Vuex from "vuex";
import groups from "./groups";
import items from "./items";


Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        groups,
        items
    }
})