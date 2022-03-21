//import Vue from 'vue'
function countCart(state) {
    state.cart.totalQuantity = 0
    state.cart.totalSum = 0

    state.cart.items.map(function(item) {
        state.cart.totalQuantity += item.quantity
        state.cart.totalSum += item.price * item.quantity
    })

}

function delItemFromCart(state, item) {
    const idx = state.cart.items.findIndex(item1 => item1.id === item.id)
        //console.log(`УДАЛЯЕМ ${item} idx = ${idx}`)

    state.cart.items.splice(idx, 1)
    countCart(state)
}
export default {

    state: {
        cart: {
            items: [],
            totalSum: 0,
            totalQuantity: 0
        }
    },
    actions: {
        addToCart(context, paload) {

            //console.log(paload)
            context.commit('setItemToCart', paload)

        },
        deleteItemFromCart(context, paload) {
            //удаляе элемент ссылаясь на функцию (method)-> далее на внешнию функцию удаление (она нужна что бы не дублировать код)
            context.commit('delItemFromCart', paload)

        },
        clearCart(context) {
            context.commit('clearCart')
        }

    },

    mutations: {

        setItemToCart(state, { item, quantity = 1 }) {
            //console.log(`item = ${item.item} q = ${quantity}`)

            const idx = state.cart.items.findIndex(item1 => item1.id === item.id)

            //console.log(idx)

            if (idx === -1) {
                state.cart.items.push({
                    id: item.id,
                    img: '/img/products/l' + item.vendor + '.jpg',
                    item: item.item,
                    price: item.price,
                    quantity: quantity
                })

            } else {

                state.cart.items[idx].quantity += quantity
                state.cart.items[idx].quantity === 0 ? delItemFromCart(state, state.cart.items[idx].item) : ''
            }
            countCart(state)
                //console.log(state.cart)
        },

        delItemFromCart(state, { item }) {
            //удалени происходит во внешней функции для того чтобы не дублировать код
            delItemFromCart(state, item)
        },

        clearCart(state) {
            console.log('clear CART!!!')
            state.cart.items = []
            state.cart.totalQuantity = 0
            state.cart.totalSum = 0
        }

    },
    getters: {
        totalQuantity(state) {
            return state.cart.totalQuantity
        },
        totalSum(state) {
            return state.cart.totalSum
        },
        getCartItems(state) {
            return state.cart.items
        }
    }
}