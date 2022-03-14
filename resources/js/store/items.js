import Vue from 'vue'
import { eventEmitter } from "../app"
export default {
    state: {
        items: null,
        item: null,
        pagination: {},
        sort: {
            sortBy: 'item',
            sortType: 'ASC'
        },
        method: 'items',
        currentPage: 1,
        id: ''

    },
    mutations: {

        setSort(state, payload) {
            console.log("SETSORT");
            console.log(payload);
            state.sort.sortBy = payload.sortBy
            state.sort.sortType = payload.sortType
        },

        setItems(state, payload) {

            state.items = payload.data
        },

        setPagination(state, payload) {

            //state.pagination.first_page_url = payload.first_page_url
            state.pagination.from = payload.from
            state.pagination.last_page = payload.last_page
                // state.pagination.last_page_url = payload.last_page_url
            state.pagination.links = payload.links
            state.pagination.next_page_url = payload.next_page_url
            state.pagination.path = payload.path
            state.pagination.per_page = payload.per_page
            state.pagination.prev_page_url = payload.prev_page_url
            state.pagination.to = payload.to
            state.pagination.total = payload.total
            state.pagination.current_page = payload.current_page
            state.currentPage = payload.current_page

            console.log("ПАГИНАЦИЯ ИЗМЕНЕНА!")
            eventEmitter.$emit('paginationUpdate')

        },

        setCurrentPage(state, payload) {
            state.pagination.current_page = payload.current_page
        },
        setMethod(state, payload) {
            state.method = payload.method
        },

        setId(state, payload) {
            state.id = payload.id
        }

    },
    actions: {
        asyncGetItems(context, payload) {

            let search = ''

            //при первом заходе в shop sortBy и sortType  не установлены
            if (typeof payload == 'undefined') {
                payload = {
                    sortBy: this.state.items.sort.sortBy,
                    sortType: this.state.items.sort.sortType
                }
            }


            //если страница не указана переходим на стр № 1 (пагинация)
            if (typeof payload.page == 'undefined') {
                payload.page = 1

            }

            if (typeof payload.id == 'undefined') {
                payload.id = ''
            }

            console.log(`METHOD = ${this.state.items.method}`)
            console.log(`ID = ${this.state.items.id}`)
            Vue.resource(`/api/v1/${this.state.items.method}/${this.state.items.id}?sort=${this.state.items.sort.sortBy}&sortType=${this.state.items.sort.sortType}
            &page=${payload.page}`)
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
        currentPage(state) {
            return state.currentPage
        },
        id(state) {
            return state.id
        }

    },
}