import Vue from 'vue'

export default {
    state: {
        items: null,
        item: null,
        pagination: {},
        sort: {
            sortBy: 'item',
            sortType: 'ASC'
        }

    },
    mutations: {
        setSort(state, payload) {
            state.sort.sortBy = payload.sort.sortBy
            state.sort.sortType = payload.sort.sortType
        },

        setItems(state, payload) {

            state.items = payload.data
        },

        setPagination(state, payload) {

            state.pagination.sfirst_page_url = payload.first_page_url
            state.pagination.from = payload.from
            state.pagination.last_page = payload.last_page
            state.pagination.last_page_url = payload.last_page_url
            state.pagination.links = payload.links
            state.pagination.next_page_url = payload.next_page_url
            state.pagination.path = payload.path
            state.pagination.per_page = payload.per_page
            state.pagination.prev_page_url = payload.prev_page_url
            state.pagination.to = payload.to
            state.pagination.total = payload.total
            state.pagination.current_page = payload.current_page

        }

    },
    actions: {
        async asyncGetItems(context, payload) {
            // console.log("GET ITEMS !")
            //console.log(payload.page)

            //при первом заходе в shop sortBy и sortType  не установлены
            if (typeof payload == 'undefined') {
                payload = {
                    sortBy: 'item',
                    sortType: 'ASC'
                }
            } else if (typeof payload.sortBy == 'undefined' || typeof payload.sortType == 'undefined') {
                payload.sortBy = 'item'
                payload.sortType = 'ASC'
            }


            if (typeof payload.page == 'undefined') {
                payload.page = 1

            }



            Vue.resource(`/api/v1/items?sort=${this.state.items.sort.sortBy}&sortType=${this.state.items.sort.sortType}&page=${payload.page}`)
                .get().then(res => res.json()).then(res => {
                    context.commit('setItems', res)
                    context.commit('setPagination', res)
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
        pagination(state) {
            return state.pagination
        },
    },
}