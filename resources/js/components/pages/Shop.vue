<template>
    <div>



        <!-- Shop Page Start -->
        <div class="main-shop-page pb-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3  order-2">
                   
                       <menu-shop/>
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
                                    <li><span class="grid-item-list"> товары 1-12 of 13</span></li>
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
                                            <li><a href="/shop/index?sort=item">Имя</a></li>
                                            <li><a href="/shop/index?sort=price">Цена</a></li>
                                        </ul>
                                    </div>

                                    <span><a href="/shop/index?type_sort=DESC&sort=price"><i
                                                class="fa fa-arrow-up"></i></a></span>
                                    <span><a href="/shop/index?type_sort=ASC&sort=price"><i
                                                class="fa fa-arrow-down"></i></a></span>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>



                        <!-- Grid & List View End -->
                        <div class="main-categorie">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane ">

                                    <div class="row">
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="/product/view?vendor=l43661">
                                                        <img class="primary-img" src="/images/products/l43661.jpg"
                                                            alt="Доска гладильная Haushalt НР1Т/С корица 1220*400 (терм. пластик, европодст., удлин., кроншт)">

                                                    </a>
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
                                                    <h4><a href="/product/view?vendor=l43661">Доска гладильная Haushalt
                                                            НР1Т/С корица 1220*400 (терм. пластик, европодст., удлин.,
                                                            кроншт)</a></h4>
                                                    <p>
                                                        <span class="price">р.</span>
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


                                <div id="list-view" class="tab-pane active">

                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <router-link :to="{name:'detail'}">
                                                 <img class="primary-img" src="/images/products/l43661.jpg"
                                                    alt="Доска гладильная Haushalt НР1Т/С корица 1220*400 (терм. пластик, европодст., удлин., кроншт)">    
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
                                            <h4><a href="/product/view?vendor=l43661">Доска гладильная Haushalt НР1Т/С
                                                    корица 1220*400 (терм. пластик, европодст., удлин., кроншт)</a></h4>
                                            <p>
                                                <span class="price">р.</span>

                                            </p>
                                            <!--<p>Гладильный стол из термостойкого пластика размером 1220*400мм
Инновационная технология отражения пара. Эффект двусторонней глажки.
Устойчивая металлическая ножка.
Пластиковые наконечники на опорах против скольжения и повреждения пола.
Автоматический многоуровневый регулятор высоты до 0,9 м.
Двухпозиционная EURO подставка под утюг с термостойкими силиконовыми вставками, специально для утюгов с тефлоновым покрытием.
Широкая гладильная поверхность позволяет гладить постельное белье и скатерти.
Сертифицированный электросоединитель 2,2 м.
Подвижный складной держатель шнура.
Защита от случайного раскладывания
Съемный чехол из качественных термостойких тканей.
Вес - 4,5кг</p>-->


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

                        <!--Breadcrumb and Page Show Start -->
                        <div class="pagination-box fix">



                            <ul class="blog-pagination ">

                                <ul class="pagination">
                                    <li class="prev disabled"><a href="/shop/index?page=0" data-page="1">&laquo;</a></li>
                                    
                                    <li class="active"><a href="/shop/index" data-page="0">1</a></li>
                                    <li><a href="/shop/index?page=2" data-page="1">2</a></li>

                                    <li class="next"><a href="/shop/index?page=2" data-page="1">&raquo;</a></li>
                                </ul>
                            </ul>

                            <div class="toolbar-sorter-footer">
                                <label>Показать:</label>
                                <select class="sorter" name="sorter">
                                    <option value="Position" selected="selected">12</option>
                                    <option value="Product Name">15</option>
                                    <option value="Price">30</option>
                                </select>
                                <span>страниц</span>
                            </div>
                        </div>
                        <!--Breadcrumb and Page Show End -->
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
    export default {

        components:{
            'menu-shop':Menu,
        }

    }
</script>