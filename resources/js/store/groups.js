import Vue from 'vue'

export default {
    state: {
        groups: null
    },
    mutations: {
        setGroups(state, payload) {
            state.groups = payload.data
        },
    },
    actions: {
        async asyncGetGroups(context, payload) {

            Vue.resource(`/api/v1/maingroup`)
                .get().then(res => res.json()).then(res => {
                    context.commit('setGroups', res)
                })
        }

    },
    getters: {
        groups(state) {

            return state.groups
        }
    },
}