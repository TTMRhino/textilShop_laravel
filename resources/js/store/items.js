import Vue from 'vue'

export default {
    state: {
        items: null,
        item: null
    },
    mutations: {

        setItems(state, payload) {

            state.items = payload.data
        },
    },
    actions: {
        async asyncGetItems(context, payload) {

            Vue.resource(`/api/v1/items/`)
                .get().then(res => res.json()).then(res => {
                    context.commit('setItems', res)
                })
        },





    },
    getters: {
        items(state) {

            return state.items
        }
    },
}