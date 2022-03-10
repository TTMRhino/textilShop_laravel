<template>
  
        <header>
            <!-- Header Top Start -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Header Top left Start -->
                        <div class="col-lg-4 col-md-12 d-center">
                            <div class="header-top-left">
                                <img src="images/icon/call.png" alt=""> +7(9000) - 741-791
                            </div>
                        </div>
                        <!-- Header Top left End -->

                        <!-- Search Box Start -->
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <div class="search-box-view">
                               
                                    <input type="text" 
                                    v-model ="searchItem"
                                    class="email" 
                                    placeholder="Поиск ..." 
                                    >
                                    <i class="fa-solid fa-magnifying-glass"></i>


                                   
                                     <button class="submit" @click="search(searchItem)">

                                     </button>
                              
                            </div>
                        </div>
                        <!-- Search Box End -->

                        <!-- Header Top Right Start -->
                        <div class="col-lg-4 col-md-12">

                          <!--  <div class="header-top-right">
                                    <h4 class="text-center">Вы зашли под организацией:</h4>
                                    <h4 class=" text-center text-info">admin</h4>
                                
                            </div> 
                            -->
                            

                        </div>
                        <!-- Header Top Right End -->
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Top End -->
            <!-- Header Bottom Start -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 col-sm-5 col-5">
                            <div class="logo">
                               
                                <router-link :to="{name:'home'}">
                                    <img src="/images/logo/logo.png" alt="logo-image">
                                </router-link>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav>
                                    <ul class="middle-menu-list">
                                        <li>
                                            <router-link :to="{name:'home'}">Домой<i class="fa "></i></router-link>                                     </router-link>

                                        </li>
                                        <li>                                            
                                            <router-link :to="{name:'about'}">О нас</router-link>     
                                        </li>
                                        <li>                                            
                                            <router-link :to="{name:'shop'}">Товары</router-link>  
                                        </li>


                                      <!--  <li>
                                            
                                            <router-link :to="{name:'contact'}">Контакты</router-link> 
                                        </li>-->
                                        <!--<li>
                                           
                                            <router-link :to="{name:'about'}"> <i class="fa fa-key"></i>Кабинет</router-link> 
                                        </li>
                                      <!--  <li>
                                            <a href="/auth/logout">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                LogOut <br />
                                            </a>

                                        </li>-->

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul id="cartBox">

                                    <li>
                                        <a href="/cart/index">
                                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                            <span class="cart-counter">
                                                0
                                            </span>
                                        </a>
                                        <ul class="ht-dropdown main-cart-box">
                                            <li>

                                                <!-- Cart Footer Inner Start -->
                                                <div class="cart-footer fix">
                                                    <h5>итого :<span class="f-right">0р.</span></h5>
                                                    <div class="cart-actions">
                                                        <a class="checkout" href="/cart/index">Корзина</a>
                                                    </div>
                                                </div>
                                                <!-- Cart Footer Inner End -->

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cartt Box End -->
                        <div class="col-sm-12 d-lg-none">
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li>
                                          
                                            <router-link :to="{name:'home'}"> Домой</router-link> 
                                            
                                        </li>
                                        <li>
                                            
                                            <router-link :to="{name:'about'}"> Товары</router-link>
                                        </li>


                                        </li>
                                        <li>
                                            
                                            <router-link :to="{name:'about'}"> О Нас</router-link>
                                        </li>
                                        <li>                                         
                                            <router-link :to="{name:'about'}"> Контакты</router-link>
                                        </li>

                                       <!-- <li>
                                            <router-link :to="{name:'about'}"> <i class="fa fa-key"></i>Кабинет</router-link> 
                                        </li>
                                        <li>
                                          
                                            <router-link :to="{name:'about'}"> <i class="fa fa-sign-out"></i> LogOut</router-link> 
                                            

                                        </li>
                                    -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Header Bottom End -->
        </header>
   
</template>

<script>
    export default {
        data(){
            return{
                searchItem:''
            }
        },
        methods:{
             search(search){
                 console.log('Searh path')
               console.log(this.$route.path)
                this.$store.dispatch('asyncGetItems',{search})
                //TO DO поиск в HEADER`е 1- нужно перенапрваить в  SHOP 2-передать значение search
                let path = this.$route.path.split("/")
               // path = path
                console.log('Split path = '+ path[1])

                if( path[1] != 'shop'){
                     this.$router.push({ name: 'shop', params: { search } });
                }
                   
                
                 
            }
        }
    }
</script>