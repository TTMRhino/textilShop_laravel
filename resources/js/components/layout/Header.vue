<template>
    <div>
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
                                <form action="http://textileshop/shop/search" method="get">
                                    <input type="text" class="email" placeholder="Поиск ..." name="q">
                                    <button type="submit" class="submit"><i class="fa fa-search"></i></button>

                                </form>
                            </div>
                        </div>
                        <!-- Search Box End -->

                        <!-- Header Top Right Start -->
                        <div class="col-lg-4 col-md-12">
                            <div class="header-top-right">
                                <h4 class="text-center">Вы зашли под организацией:</h4>
                                <h4 class=" text-center text-info">admin</h4>



                                <!-- Header-list-menu End -->
                            </div>

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
                                <a href="/"><img src="/images/logo/logo.png" alt="logo-image"></a>
                            </div>
                        </div>
                        <!-- Primary Vertical-Menu End -->
                        <!-- Search Box Start -->
                        <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="middle-menu pull-right">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="middle-menu-list navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <router-link :to="{name:'home'}">Домой</router-link>
                                        </li>
                                        <li class="nav-item">                                           
                                            <router-link :to="{name:'about'}">О нас</router-link>
                                        </li>
                                        <li class="nav-item">
                                           
                                            <router-link :to="{name:'about'}">Товары</router-link>
                                        </li>
                                        <li class="nav-item">
                                           
                                             <router-link :to="{name:'about'}">Контакты</router-link>
                                        </li>
                                        <li class="nav-item">                                         
                                             <router-link :to="{name:'about'}"> <i class="fa fa-key"/> Кабинет<br /></router-link>
                                        </li>
                                        <li class="nav-item">                                           
                                             <router-link :to="{name:'about'}"> <i class="fa fa-sign-out"/>LogOut<br /></router-link>

                                        </li>



                                    </ul>
                                    </div>
                                </nav>

                             <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
                            </div>
                        </div>
                        <!-- Search Box End -->
                        <!-- Cartt Box Start -->
                        <div class="col-lg-3 col-sm-7 col-7">
                            <div class="cart-box text-right">
                                <ul id="cartBox">

                                    <li><a href="/cart/index"><i class="fa fa-shopping-basket"></i><span
                                                class="cart-counter">0</span></a>
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
                                        <li><a href="/">Домой</a></li>
                                        <li><a href="/shop/index">Товары</a></li>
                                        <li><a href="about.html">О Нас</a></li>
                                        <li><a href="contact.html">Контакты</a></li>

                                        <li>
                                            <a href="/auth/logout">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>

                                                LogOut <br />
                                            </a>

                                        </li>
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
    </div>
</template>

<script>
    export default {

    }
</script>