<template>
    <div>



        <!-- Shop Page Start -->
        <div class="main-shop-page pb-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3  order-2">
                   
                       <menu-shop   />
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding fix mb-30">
                            <div class="grid-list-view f-left">
                                <ul class="list-inline nav">
                                    <li><a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a class="active" data-toggle="tab" href="#list-view"><i
                                                class="fa fa-list-ul"></i></a></li>
                                    <li><span class="grid-item-list"> товары {{ pagination.to - 10}}-{{ pagination.to }} of {{ pagination.total}}</span></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter f-right">

                                <div class="toolbar-sorter">

                                    <div class="btn-group btn-sort">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown">
                                            Сортировать <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#" @click="setSortBy('item')">
                                                    Имя
                                                </a>
                                                </li>
                                            <li>
                                                <a href="#" @click="setSortBy('price')">
                                                    Цена
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <span>
                                        <a href="#" @click="sortType('ASC')">
                                            <i class="fa fa-arrow-up"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#" @click="sortType('DESC')">
                                            <i class="fa fa-arrow-down"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>

             <!-- PAGINATION -->
                        <pagination :pagination ="pagination" />

                        <!-- Grid & List View End -->
                        <div class="main-categorie">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane ">

                                    <div class="row">
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-sm-6"
                                             v-for="item in items"
                                                    :key="item.id"
                                        >
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                     <router-link :to="{name:'detail', params:{id: item.id}}">
                                                        <img class="primary-img" :src="'/images/products/' + item.vendor +'.jpg'"
                                                            :alt=" item.item ">

                                                    </router-link>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h4>
                                                         <router-link :to="{name:'detail', params:{id: item.id}}">
                                                            {{ item.item }}
                                                        </router-link>
                                                    </h4>
                                                    <p>
                                                        <span class="price">{{ item.price }} р.</span>
                                                    </p>

                                                    <div class="alert alert-warning" role="alert">
                                                        Под заказ!
                                                    </div>

                                                    <div class="pro-actions">
                                                        <div class="actions-secondary">
                                                            <!--<a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>-->
                                                            <a class="add-cart add-to-cart" href="/cart/add?id=557"
                                                                data-id="557" data-toggle="tooltip"
                                                                title="Add to Cart">В корзину</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <!-- Single Product End -->





                                    </div>
                                </div>



                                <!-- LIST VIEW  -->
                                <!-- #grid view End -->


                                <div id="list-view" class="tab-pane active"
                                     v-for="item in items"
                                            :key="item.id"
                                >

                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <router-link :to="{name:'detail', params:{id: item.id}}">
                                         
                                                 <img class="primary-img" :src="'/images/products/' + item.vendor +'.jpg'"
                                                    :alt=" item.item ">    
                                            </router-link>
                                           
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content" >
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h4>
                                                <router-link :to="{name:'detail', params:{id: item.id}}">
                                                {{ item.item }}
                                                 </router-link>
                                            </h4>
                                            <p>
                                                <span class="price"> {{ item.price }}р.</span>

                                            </p>
                                         


                                            <div class="alert alert-warning" role="alert"
                                                style="width: 160px; text-align:center;">

                                                Под заказ!
                                            </div>

                                            <div class="pro-actions">
                                                <div class="actions-secondary">
                                                    <!--<a href="wishlist.html" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart"></i></a>-->
                                                    <a class="add-cart add-to-cart" href="/cart/add?id=557"
                                                        data-id="557" data-toggle="tooltip" title="Add to Cart">В
                                                        корзину</a>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Product Content End -->
                                    </div>





                                </div>
                                <!-- #list view End -->




                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>

                        <!-- PAGINATION -->
                        <pagination :pagination ="pagination" />

                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>

    </div>
</template>


<script>

import Menu from "../layout/Menu.vue"
import Pagination from "../layout/Pagination.vue"
    export default {
    components:{
            'menu-shop':Menu,
            'pagination': Pagination,
           
        },
        data(){
            return{
                sortB:"item",
                sortT:'ASC',
                pagination: null,
                search:this.$route.params['search'],
            }
        },

       
        created(){

            this.$store.dispatch('asyncGetItems',{search:this.search})
            this.pagination = this.$store.getters.pagination  
            
        },
        updated(){
           this.pagination = this.$store.getters.pagination  
        },
        
        
         computed:{
            items(){                
                this.pagination = this.$store.getters.pagination 
                return this.$store.getters.items
            },
           
        },

        methods:{
           

            setSortBy: function(sortBy){               
                this.sortB = sortBy
                
                this.$store.commit('setSort', { sortBy: sortBy, sortType:this.sortT})

                this.$store.dispatch('asyncGetItems')
                console.log(this.sortB)
            },
           

            sortType:function(sortType='ASC'){
                this.sortT = sortType
               this.$store.commit('setSort', {sortBy:this.sortB, sortType:this.sortT})
             
           
              this.$store.dispatch('asyncGetItems')

               // console.log(this.sortType + this.sort)
            },
           
        }

    }
</script>