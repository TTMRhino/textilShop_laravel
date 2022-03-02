import Vue from 'vue'

export default {
    state: {
        items: null,
        item: null,

    },
    mutations: {

        setItems(state, payload) {

            state.items = payload.data
        },

    },
    actions: {
        async asyncGetItems(context, payload) {
            console.log("PPPPPPPPPPPPPPPPPPP")
            console.log(payload)

            if (typeof payload.sortBy == 'undefined')
            //НАчать отсуюдлго .При монтороавнии стр переменные  sort и sortType == undifined!

                Vue.resource(`/api/v1/items?sort=${payload.sort}&sortType=${payload.sortType}`)
                .get().then(res => res.json()).then(res => {
                    context.commit('setItems', res)
                })
        },

    },
    getters: {
        items(state) {

            return state.items
        },
        sort(state) {
            return state.sort
        },
    },
}