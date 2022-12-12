<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>
<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="ion-ios-close-empty f-40"></i></span>
        <div class="clearfix"></div>
        <form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown">
                <a href="#">Home</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                    <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                    <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                    <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                    <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                    <li class="level2"><a href="#" title="">Demo 6</a></li>
                </ul>
            </li>
            <li class="level1 active dropdown"><a href="#">Shop</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Shop Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Categories</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Type</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                <li class="level3"><a href="simple.html">Simple</a></li>
                                <li class="level3"><a href="variable.html">Variable</a></li>
                                <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                <li class="level3"><a href="grouped.html">Grouped</a></li>
                                <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                <li class="level3"><a href="onsale.html">On sale</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Single Product Layout</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                <li class="level3"><a href="product_right_sidebar.html" title="">Product Right Sideba</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Other Pages</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
            <li class="level1">
                <a href="#">Pages</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                    <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                    <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                    <li class="level2"><a href="404.html" title="404">404</a></li>
                    <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                </ul>
            </li>
            <li class="level1">
                <a href="#">Blog</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                    <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                    <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                    <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile-account">
            <li><a href=""><i class="fa fa-unlock-alt"></i>Login</a></li>
            <li><a href=""><i class="fa fa-user-plus"></i>Register</a></li>
            <li><a href=""><i class="fa fa-heart"></i>Wishlist</a></li>
        </ul>
        <h4 class="mb-title">connect and follow</h4>
        <div class="mobile-social mg-bottom-30">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</div>
<!-- end push menu-->
<!-- Push cart -->
<div class="pushmenu pushmenu-left cart-box-container">
    <div class="cart-list">
        <div class="cart-list-heading">
            <h3 class="cart-title">My cart</h3>
            <span class="close-left js-close"><i class="ion-ios-close-empty"></i></span>
        </div>
        <div class="cart-inside">
            <ul class="list">
                <li class="item-cart">
                    <div class="product-img-wrap">
                        <a href="#" title="Product"><img src="img/product/cart_product_1.jpg" alt="Product" class="img-responsive"></a>
                    </div>
                    <div class="product-details">
                        <div class="inner-left">
                            <div class="product-name"><a href="#">Grosgrain tie cotton top</a></div>
                            <div class="product-price"><span>$20.9</span></div>
                            <div class="cart-qtt">
                                <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                    <span class="minus-icon"><i class="ion-ios-minus-empty"></i></span>
                                </button>
                                <input type="text" name="number" value="1" class="product_quantity_number js-number">
                                <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                    <span class="plus-icon"><i class="ion-ios-plus-empty"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item-cart">
                    <div class="product-img-wrap">
                        <a href="#" title="Product"><img src="img/product/cart_product_2.jpg" alt="Product" class="img-responsive"></a>
                    </div>
                    <div class="product-details">
                        <div class="inner-left">
                            <div class="product-name"><a href="#">Grosgrain tie cotton top</a></div>
                            <div class="product-price"><span>$20.9</span></div>
                            <div class="cart-qtt">
                                <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                    <span class="minus-icon"><i class="ion-ios-minus-empty"></i></span>
                                </button>
                                <input type="text" name="number" value="1" class="product_quantity_number js-number">
                                <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                    <span class="plus-icon"><i class="ion-ios-plus-empty"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="cart-bottom">
                <div class="cart-form">
                    <div class="cart-note-form">
                        <label for="CartSpecialInstructions" class="cart-note cart-note_text_label small--text-center">Special Offer:</label>
                        <textarea rows="6" name="note" id="CartSpecialInstructions" class="cart-note__input form-control note--input"></textarea>
                    </div>
                </div>
                <div class="cart-button mg-top-30">
                    <a class="zoa-btn checkout" href="#" title="">Check out</a>
                </div>
            </div>
        </div>
        <!-- End cart bottom -->
    </div>
</div>
<!-- End pushcart -->
<!-- Search form -->
<div class="search-form-wrapper header-search-form">
    <div class="container">
        <div class="search-results-wrapper">
            <div class="btn-search-close">
                <i class="ion-ios-close-empty"></i>
            </div>
        </div>
        <ul class="zoa-category text-center">
            <li><a href="">All Categories</a></li>
            <li><a href="">Woman</a></li>
            <li><a href="">Man</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">Kid</a></li>
            <li><a href="">Others</a></li>
        </ul>
        <form method="get" action="/search" role="search" class="search-form  has-categories-select">
            <input name="q" class="search-input" type="text" value="" placeholder="Enter your keywords..." autocomplete="off">
            <input type="hidden" name="post_type" value="product">
            <button type="submit" id="search-btn"><i class="ion-ios-search-strong"></i></button>
        </form>
    </div>
</div>
<!-- End search form -->
<!-- Account -->
<div class="account-form-wrapper">
    <div class="container">
        <div class="search-results-wrapper">
            <div class="btn-search-close">
                <i class="ion-ios-close-empty black"></i>
            </div>
        </div>
        <div class="account-wrapper">
            <ul class="account-tab text-center">
                <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                <li><a data-toggle="tab" href="#register">Register</a></li>
            </ul>
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="zoaname">Name</label>
                                    <input type="text" class="form-control form-account" id="zoaname">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password *</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword1">
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Sign Up</button>
                                </div>
                            </form>
                            <div class="social-group-button">
                                <a href="" class="twitter button">
                                    <div class="slide">
                                        <p>
                                            Connect with Twitter
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </div>
                                </a>
                                <a href="" class="facebook button">
                                    <div class="slide">
                                        <p>
                                            Connect with Facebook
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <span class="text-note">Already have an account? <a href="">Sign In!</a></span>

                        </div>
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-register">
                                <div class="form-group">
                                    <label for="exampleInputEmail2">E-mail</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Password</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword3">
                                </div>
                                <div class="flex justify-content-between mg-30">
                                    <div class="checkbox">
                                        <input data-val="true" data-val-required="The Remember me? field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true" />
                                        <input name="RememberMe" type="hidden" value="false" />
                                        <label for="RememberMe">Remember me</label>
                                    </div>
                                    <a href="" class="text-note no-mg">Forgot Password?</a>
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Sign In</button>
                                </div>
                            </form>
                            <div class="social-group-button">
                                <a href="" class="twitter button">
                                    <div class="slide">
                                        <p>
                                            Connect with Twitter
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </div>
                                </a>
                                <a href="" class="facebook button">
                                    <div class="slide">
                                        <p>
                                            Connect with Facebook
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <span class="text-note">Don’t have an account? <a href="">Register!</a></span>
                        </div>
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-reset">
                                <div class="form-group">
                                    <label for="exampleInputEmail5">E-mail *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail5">
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="register" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail7">E-mail *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail7">
                                </div>
                                <div class="form-group">
                                    <label for="zoaname2">Name</label>
                                    <input type="text" class="form-control form-account" id="zoaname2">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Password *</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword2">
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Sign Up</button>
                                </div>
                            </form>
                            <div class="social-group-button">
                                <a href="" class="twitter button">
                                    <div class="slide">
                                        <p>
                                            Connect with Twitter
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </div>
                                </a>
                                <a href="" class="facebook button">
                                    <div class="slide">
                                        <p>
                                            Connect with Facebook
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <span class="text-note">Already have an account? <a href="">Sign In!</a></span>

                        </div>
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-register">
                                <div class="form-group">
                                    <label for="exampleInputEmail6">E-mail</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail6">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" class="form-control form-account" id="exampleInputPassword4">
                                </div>
                                <div class="flex justify-content-between mg-30">
                                    <div class="checkbox">
                                        <input data-val="true" data-val-required="The Remember me? field is required." id="RememberMe2" name="RememberMe" type="checkbox" value="true" />
                                        <input name="RememberMe" type="hidden" value="false" />
                                        <label for="RememberMe2">Remember me</label>
                                    </div>
                                    <a href="" class="text-note no-mg">Forgot Password?</a>
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Sign In</button>
                                </div>
                            </form>
                            <div class="social-group-button">
                                <a href="" class="twitter button">
                                    <div class="slide">
                                        <p>
                                            Connect with Twitter
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </div>
                                </a>
                                <a href="" class="facebook button">
                                    <div class="slide">
                                        <p>
                                            Connect with Facebook
                                        </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </div>
                                </a>
                            </div>
                            <span class="text-note">Don’t have an account? <a href="">Register!</a></span>
                        </div>
                        <div class="col-md-4">
                            <form method="post" class="form-customer form-reset">
                                <div class="form-group">
                                    <label for="exampleInputEmail4">E-mail *</label>
                                    <input type="email" class="form-control form-account" id="exampleInputEmail4">
                                </div>
                                <div class="btn-button-group mg-top-30 mg-bottom-15">
                                    <button type="submit" class="zoa-btn btn-login hover-white">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account -->
</div>
<div class="wrappage">
    <header id="header" class="header-v1">
        <div class="header-center">
            <div class="container container-content">
                <div class="row flex align-items-center justify-content-between">
                    <div class="col-md-4 col">
                        <div class="topbar-right">
                            <div class="element">
                                <a href="#" class="icon-pushmenu js-push-menu">
                                    <svg width="26" height="16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66 41" style="enable-background:new 0 0 66 41;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill: none;
                                                        stroke: #000000;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                        <g>
                                            <line class="st0" x1="1.5" y1="1.5" x2="64.5" y2="1.5" />
                                            <line class="st0" x1="1.5" y1="20.5" x2="64.5" y2="20.5" />
                                            <line class="st0" x1="1.5" y1="39.5" x2="64.5" y2="39.5" />
                                        </g>
                                            </svg>
                                </a>
                            </div>
                            <div class="element element-currency hidden-xs hidden-sm">
                                <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                    <span>USD</span>
                                    <span class="ion-arrow-down-b f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label3">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </div>
                            <div class="element element-leaguage hidden-xs hidden-sm">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/icon-l.png" alt="">
                                    <span>EN</span>
                                    <span class="ion-arrow-down-b f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col flex justify-content-center">
                        <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="col-md-4 col flex justify-content-end">
                        <div class="topbar-left">
                            <div class="element element-search hidden-xs hidden-sm">
                                <a href="#" class="zoa-icon search-toggle">
                                    <svg width="20" height="20" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                                <g>
                                                    <path d="M0,39.4C0,50,4.1,59.9,11.6,67.3c7.4,7.5,17.3,11.6,27.8,11.6c9.5,0,18.5-3.4,25.7-9.5l19.8,19.7c1.2,1.2,3.1,1.2,4.2,0
        c0.6-0.6,0.9-1.3,0.9-2.1s-0.3-1.5-0.9-2.1L69.3,65.1c6.2-7.1,9.5-16.2,9.5-25.7c0-10.5-4.1-20.4-11.6-27.9C59.9,4.1,50,0,39.4,0
        C28.8,0,19,4.1,11.6,11.6S0,28.9,0,39.4z M63.1,15.8c6.3,6.3,9.8,14.7,9.8,23.6S69.4,56.7,63.1,63s-14.7,9.8-23.6,9.8
        S22.2,69.3,15.9,63C9.5,56.8,6,48.4,6,39.4s3.5-17.3,9.8-23.6S30.5,6,39.4,6S56.8,9.5,63.1,15.8z" />
                                                </g>
                                            </svg>
                                </a>
                            </div>
                            <div class="element element-user hidden-xs hidden-sm">
                                <a href="#" class="zoa-icon js-user">
                                    <svg width="19" height="20" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 102.8" style="enable-background:new 0 0 100 102.8;" xml:space="preserve">
                                                <g>
                                                    <path d="M75.7,52.4c-2.1,2.3-4.4,4.3-7,6C82.2,58.8,93,69.9,93,83.5v12.3H7V83.5c0-13.6,10.8-24.7,24.3-25.1c-2.6-1.7-5-3.7-7-6
        C10.3,55.9,0,68.5,0,83.5v15.8c0,1.9,1.6,3.5,3.5,3.5h93c1.9,0,3.5-1.6,3.5-3.5V83.5C100,68.5,89.7,55.9,75.7,52.4z" />
                                                    <g>
                                                        <path d="M50,58.9c-16.2,0-29.5-13.2-29.5-29.5S33.8,0,50,0s29.5,13.2,29.5,29.5S66.2,58.9,50,58.9z M50,7
            C37.6,7,27.5,17.1,27.5,29.5S37.6,51.9,50,51.9s22.5-10.1,22.5-22.5S62.4,7,50,7z" />
                                                    </g>
                                                </g>
                                            </svg>
                                </a>
                            </div>
                            <div class="element element-cart">
                                <a href="#" class="zoa-icon icon-cart">
                                    <svg width="20" height="20" version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.4 55.4" style="enable-background:new 0 0 55.4 55.4;" xml:space="preserve">
                                                <g>
                                                    <rect x="0.2" y="17.4" width="55" height="3.4" />
                                                </g>
                                        <g>
                                            <polygon points="7.1,55.4 3.4,27.8 3.4,24.1 7.3,24.1 7.3,27.6 10.5,51.6 44.9,51.6 48.1,27.6 48.1,24.1 52,24.1 52,27.9
        48.3,55.4   " />
                                        </g>
                                        <g>
                                            <path d="M14,31.4c-0.1,0-0.3,0-0.5-0.1c-1-0.2-1.6-1.3-1.4-2.3L19,1.5C19.2,0.6,20,0,20.9,0c0.1,0,0.3,0,0.4,0
        c0.5,0.1,0.9,0.4,1.2,0.9c0.3,0.4,0.4,1,0.3,1.5l-6.9,27.5C15.6,30.8,14.8,31.4,14,31.4z" />
                                        </g>
                                        <g>
                                            <path d="M41.5,31.4c-0.9,0-1.7-0.6-1.9-1.5L32.7,2.4c-0.1-0.5,0-1.1,0.3-1.5s0.7-0.7,1.2-0.8c0.1,0,0.3,0,0.4,0
        c0.9,0,1.7,0.6,1.9,1.5L43.4,29c0.1,0.5,0,1-0.2,1.5c-0.3,0.5-0.7,0.8-1.1,0.9c-0.2,0-0.3,0-0.4,0.1C41.6,31.4,41.6,31.4,41.5,31.4
        z" />
                                        </g>
                                            </svg>
                                    <span class="count cart-count">0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <div class="container container-content">
        <ul class="breadcrumb v2">
            <li><a href="#">Home</a></li>
            <li class="active">My Account</li>
        </ul>
    </div>

    <div class="check-out">
        <div class="container">
            <div class="titlell">
                <h2>Detalle Pedido</h2>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <div class="form-name">
                        <div class="content">
                            <h5>Returning Custumer? <span style="text-transform: uppercase;"> click<a href="#" style="color:#333; text-decoration:underline"> here </a>to login</span></h5>
                            <h5>Have a coupon?<span style="text-transform: uppercase;"> click <a href="#" style="color:#333; text-decoration:underline"> here</a> to enter your code</span></h5>
                        </div>

                        <div class="billing">
                            <h2 style="font-size: 26px; padding-bottom:20px;font-weight: bold">billing details</h2>
                            <form id="direccionForm" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Nombre<span style="color:#f33">*</span></label><br>
                                        <input type="text" name="nombre" placeholder="Ingrese Nombre" required class="district" value="{{ $data['direccion']->nombre ?? "" }}">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Apellido<span>*</span></label><br>
                                        <input type="text" name="apellido" placeholder="Ingrese Apellido" required class="district" value="{{ $data['direccion']->apellido ?? "" }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Correo Electrónico *</label><br>
                                        <input type="text" name="email" placeholder="Ingrese Email"required class="district" value="{{ $data['direccion']->email ?? "" }}">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Celular *</label><br>
                                        <input type="text" name="celular" placeholder="Ingrese Celular" required class="district" value="{{ $data['direccion']->celular ?? "" }}">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Calle/Av/Jr *</label><br>
                                        <input type="text" name="direccion" placeholder="Ingrese Calle/Av/Jr"required class="district" value="{{ $data['direccion']->direccion ?? "" }}">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Numero *</label><br>
                                        <input type="text" name="numero" placeholder="Ingrese Numero" required class="district" value="{{ $data['direccion']->numero ?? "" }}">
                                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 ">
                                        <label class="out">Departamento *</label><br>
                                        <input type="text" name="departamento" placeholder="Ingrese Departamento" required  class="district" value="{{ $data['direccion']->departamento ?? "" }}">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Provincia *</label><br>
                                        <input type="text" name="provincia" placeholder="Ingrese Provincia" required class="district" value="{{ $data['direccion']->provincia ?? "" }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <label class="out">Distrito *</label><br>
                                        <input type="text" name="distrito" placeholder="Ingrese Distrito" required class="district" value="{{ $data['direccion']->distrito ?? "" }}">
                                    </div>
                                    <div class="col-md-6 col-sm-6 ">
                                        <label class="out">Postcode/ZIP</label><br>
                                        <input type="text" name="zip_code" placeholder="Ingrese Código Postal" required class="district" value="{{ $data['direccion']->zip_code ?? "" }}">
                                    </div>
                                </div>
                                <label class="out" style="margin-top:20px">Notas/Referencia</label>
                                <textarea name="descripcion_adicional" placeholder="A 2 cuadras de..." class="comment">{{ $data['direccion']->descripcion_adicional ?? "" }}</textarea>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 ">
                    <div class="order">
                        <div class="content-order">
                            <div class="table">
                                <table >
                                    <caption>your order</caption>
                                    <thead>
                                    <tr>
                                        <th>product</th>
                                        <th></th>
                                        <th>total</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($data['itemsCart'] as $item)
                                        <tr>
                                            <td>{{ $item['producto']->nombre }}</td>
                                            <td><i class="fa fa-times" aria-hidden="true"></i>{{ $item->cantidad }}</td>
                                            <td>S/.{{ $item['producto']->precio ?? 0.0 }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">Sin registros</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="content-total">
                                <div class="total">
                                    <h5 class="sub-total">sub total</h5>
                                    <h5 class="prince">S/.{{ $data['subtotal'] }}</h5>
                                </div>

                                <div class="payment">
                                    <h4 class="sub-total">Tipo Comprobante</h4>
                                    @foreach ($data['tipoComprobante'] as $tipoComprobante)
                                        <input type="radio" name="id_tipo_comprobante" class="so2" value="{{ $tipoComprobante->id }}" @if($loop->first) checked @endif>
                                        <span style="font-size: 16px;color:#494949"> {{ $tipoComprobante->nombre }}</span>
                                        <hr>
                                    @endforeach
                                </div>
                                <br>

                                <div class="payment">
                                    <h4 class="sub-total">Tipo Pago</h4>
                                    @foreach ($data['tipoPago'] as $tipoPago)
                                        <input type="radio" name="id_tipo_pago" class="so2" value="{{ $tipoPago->id }}" @if($loop->first) checked @endif>
                                        <span style="font-size: 16px;color:#494949"> {{ $tipoPago->nombre }}</span>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="newsletter-heading">
                    <h3>get in touch</h3>
                    <p>Subscribe for latest stories and promotions (35% sale)</p>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12 flex-end">
                <form class="form_newsletter" action="#" method="post">
                    <input type="email" value="" placeholder="Enter your emaill" name="EMAIL" id="mail" class="newsletter-input form-control">
                    <button id="subscribe" class="button_mini zoa-btn" type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- EndContent -->

<!-- Footer -->
<footer class="footer v2">
    <div class="container">
        <div class="f-content bd-top">
            <div class="f-col hidden-xs hidden-sm">
                <a href="">
                    <img src="img/f-logo.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="f-col align-items-center">
                <p>© 2018 <a href="">Zoa.</a></p>
                <ul>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms of Use</a></li>
                </ul>
            </div>
            <div class="f-col">
                <div class="social">
                    <a href=""><i class="fa fa-rss"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                    <a href=""><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/main.js"></script>
</script>
</x-app-layout>
