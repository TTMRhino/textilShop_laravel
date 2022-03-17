<template>
    <div>
            <!-- Cart Main Area Start -->
<div class="cart-main-area pb-80 pb-sm-50">
            <div class="container">
               <h2 class="text-capitalize sub-heading">Корзина</h2>
                <div class="row" >
                    <div class="col-md-12">

                   if(!empty($_SESSION['cart'])): 
                        <!-- Form Start -->
                        <form action="#" id="table"
                         v-if="items.length > 0"
                        >
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-50" >
                                <div class="cart-table">
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                    <table >
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Фото</th>
                                                <th class="product-name">Товар</th>
                                                <th class="product-price">Цена</th>
                                                <th class="product-quantity">Количество</th>
                                                <th class="product-subtotal">Итог</th>
                                                <th class="product-remove">Удалить</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <!-- FOREACH session cart -->
                                            <tr 
                                            v-for="item in items"
                                            :key=item.id
                                            >
                                                <td class="product-thumbnail">
                                                    
                                                    <router-link 
                                                        :to="{ name:'detail', params:{ id:item.id }, 
                                                            query: { img: item.img }}">
                                                        <img :src="item.img" alt="cart-image" />
                                                    </router-link>

                                                </td>
                                                <td class="product-name">
                                                  
                                                     <router-link 
                                                        :to="{ name:'detail', params:{ id:item.id }, 
                                                            query: { img: item.img }}">
                                                         {{ item.item }}
                                                    </router-link>
                                                </td>
                                                <td class="product-price"><span class="amount"> {{ item.price }} р.</span></td>

                                                <td class="product-quantity" >
                                                    <button type="button"  
                                                    class="btn btn-light minus"
                                                    @click="changeQuantity(item,-1)"
                                                    >-</button>
                                                        <input id="count<?= $item['id'] ?>" disabled
                                                           
                                                            type="text" :value="item.quantity" />
                                                    <button type="button"  
                                                    class="btn btn-light plus"
                                                    @click="changeQuantity(item,1)"
                                                    >+</button>                                                
                                                </td>

                                                <td class="product-subtotal"> {{ item.quantity * item.price }} </td>
                                                <td class="product-remove " > 
                                                <button 
                                                     type="button"
                                                     class="delete btn btn-link" 
                                                     @click="deleteItem(item)"
                                                     >
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </button>
                                                </td>
                                            </tr>
                                        <!-- END Foreach SESSION cart -->
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-lg-8 col-md-7">
                                    
                                   
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-lg-4 col-md-12">
                                    <div class="cart_totals">
                                        <h2>Итого</h2>
                                        <br />
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Подитог:</th>
                                                    <td><span class="amount">$215.00</span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Всего:</th>
                                                    <td>
                                                        <strong><span class="amount"> {{ totalSum }}  руб.</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <router-link to="/checkout">Оформить заказ</router-link>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                  
                        <h3 v-else>Корзина пуста.</h3>
       
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>
        <!-- Cart Main Area End -->
        
    </div>
</template>

<script>
export default {
    data(){
        return{
            items:this.$store.getters.getCartItems
        }
    },
    computed:{
        totalQuantity(){
            return this.$store.getters.totalQuantity
        },
        totalSum(){
            return this.$store.getters.totalSum
        }
    },
    methods:{
        changeQuantity(item,quantity){
            //TO DO ......
            console.log(`QUANTITY ${quantity} id= ${item.item}`)
            this.$store.dispatch('addToCart',{item, quantity})
        },

        deleteItem(item){           
            this.$store.dispatch('deleteItemFromCart',{item})
      
        },



    },
    
}
</script>