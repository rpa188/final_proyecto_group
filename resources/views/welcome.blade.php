<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Ecommerce - Pedidos</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
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
            <li class="level1 active dropdown">
                <a href="#" title="Shop">Shop</a>
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
    <header id="header" class="header-v2">
        <div class="topbar hidden-xs hidden-sm">
            <button type="button" class="js-promo close"><i class="ion-ios-close-empty black" aria-hidden="true"></i></button>
            <div class="container container-content">
                <div class="row flex">
                    <div class="col col-sm-4">
                        <div class="topbar-left">
                            <span>Hotline: +01 234 567 890</span>
                            <div class="topbar-social">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-4 justify-content-center">
                        <p>Summer sale discount off 50%! <a href="">Shop Now</a></p>
                    </div>
                    <div class="col col-sm-4 justify-content-end">
                        <div class="topbar-right">
                            <div class="element element-currency">
                                <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                                    <span>$ USD</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label3">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </div>
                            <div class="element element-leaguage">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/icon-l.png" alt="">
                                    <span>English</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center">
            <div class="container container-content">
                <div class="row flex align-items-center justify-content-between">
                    <div class="col-md-4 col-xs-4 col-sm-4 col2 hidden-lg hidden-md">
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
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-4 col-sm-4 col2 justify-content-center">
                        <a href="#"><img src="img/logo2.png" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="col-md-9 col-xs-4 col-sm-4 col2 flex justify-content-end">
                        <ul class="nav navbar-nav js-menubar hidden-xs hidden-sm">
                            <li class="level1 active dropdown"><a href="#" title="Home">Home</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu style5">
                                    <ul class="level1">
                                        <li class="level2 col-6">
                                            <a href="#">Home Set 1</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="01-Home-v1.html" title="Home page 1">Home page 1 </a></li>
                                                <li class="level3"><a href="01-Home-v2.html" title="Home page 2">Home page 2 </a></li>
                                                <li class="level3"><a href="01-Home-v3.html" title="Home page 3">Home page 3 </a></li>
                                                <li class="level3"><a href="01-Home-v4.html" title="Home page 4">Home page 4 </a></li>
                                                <li class="level3"><a href="01-Home-v5.html" title="Home page 5">Home page 5 </a></li>
                                                <li class="level3"><a href="01-Home-v6.html" title="Home page 6">Home page 6 </a></li>
                                            </ul>
                                        </li>
                                        <li class="level2 col-6">
                                            <a href="#">Home Set 2</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="01-Home-v7.html" title="Home page 7">Home page 7 </a></li>
                                                <li class="level3"><a href="01-Home-v8.html" title="Home page 8">Home page 8 </a></li>
                                                <li class="level3"><a href="01-Home-v9.html" title="Home page 9">Home page 9 </a></li>
                                                <li class="level3"><a href="01-Home-v10.html" title="Home page 10">Home page 10 </a></li>
                                                <li class="level3"><a href="01-Home-v11.html" title="Home page 11">Home page 11 </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="level1 dropdown hassub"><a href="#" title="Shop">Shop</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu style4">
                                    <ul class="level1">
                                        <li class="level2 col-4a">
                                            <a href="#">Shop Pages</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="02-Shop_v1.html" title="Shop page v1">Shop page v1 </a></li>
                                                <li class="level3"><a href="02-Shop_v2.html" title="Shop page v2">Shop page v2 </a></li>
                                                <li class="level3"><a href="02-Shop_v3.html" title="Shop page v3">Shop page v3 </a></li>
                                                <li class="level3"><a href="02-Shop_v4.html" title="Shop page v4">Shop page v4 </a></li>
                                            </ul>
                                        </li>
                                        <li class="level2 col-4a">
                                            <a href="#">Product Pages</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="03-Single_product_v1.html" title="Single product v1">Single product v1</a></li>
                                                <li class="level3"><a href="03-Single_product_v2.html" title="Single product v2">Single product v2</a></li>
                                                <li class="level3"><a href="03-Single_product_v3.html" title="">Single product v3</a></li>
                                                <li class="level3"><a href="03-Single_product_v4.html" title="Single product v4">Single product v4</a></li>
                                            </ul>
                                        </li>
                                        <li class="level2 col-4a">
                                            <div class="demo-img">
                                                <a href="" class="effect-img3 plus-zoom">
                                                    <img src="img/collection_4.jpg" alt="" class="img-reponsive">

                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="level1 hassub dropdown">
                                <a href="#" title="Collection">Collection</a>
                                <div class="menu-level-1 dropdown-menu style3">
                                    <div class="row">
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="02-Shop_v1.html" class="effect-img3 plus-zoom">
                                                    <img src="img/collection_1.jpg" alt="" class="img-reponsive">

                                                </a>
                                            </div>
                                            <div class="demo-text text-center">New Trending '18</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a class="effect-img3 plus-zoom" href=""><img src="img/collection_2.jpg" alt="02-Shop_v2.html" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text text-center">New Lookbooks</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a class="effect-img3 plus-zoom" href="02-Shop_v3.html"><img src="img/collection_3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text text-center">Onsale</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="level1 dropdown hassub">
                                <a href="#" title="Pages">Pages</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu style2">
                                    <ul class="level1">
                                        <li class="level2 col-6">
                                            <a href="#">Page Set 1</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="04-About.html" title="About Us">About Us</a></li>
                                                <li class="level3"><a href="05-Contact.html" title="Contact">Contact</a></li>
                                                <li class="level3"><a href="08-My-Account.html" title="My Account">My Account</a></li>
                                                <li class="level3"><a href="09-Check-out.html" title="Check out">Check out</a></li>
                                            </ul>
                                        </li>
                                        <li class="level2 col-6">
                                            <a href="#">Page Set 2</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="13-Cart.html" title="Cart">Cart</a></li>
                                                <li class="level3"><a href="12-Coming-Soon.html" title="Coming Soon">Coming Soon</a></li>
                                                <li class="level3"><a href="11-FAQS.html" title="FAQS">FAQs</a></li>
                                                <li class="level3"><a href="10-404.html" title="">404</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li class="level1 active dropdown">
                                <a href="#" title="Blog">Blog</a>
                                <ul class="dropdown-menu menu-level-1">
                                    <li><a class="sm_title" href="#" title="Blogs">Blogs</a></li>
                                    <li class="level2"><a href="06-Blog.html" title="Blog List">Blog List</a></li>
                                    <li class="level2"><a href="07-Blog_single.html" title="Blog Single">Blog Single</a></li>
                                </ul>
                            </li>
                        </ul>
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
                            @if (Route::has('login'))
                                    @auth
                                        <div class="element element-user hidden-xs hidden-sm">
                                            <a href="{{ url('/dashboard') }}" class="zoa-icon js-user">
                                                Dashboard
                                            </a>
                                        </div>
                                    @else
                                        <div class="element element-user hidden-xs hidden-sm">
                                            <a href="{{ url('/login') }}" class="zoa-icon js-user">
                                                Login
                                            </a>
                                        </div>

                                        @if (Route::has('register'))
                                            <div class="element element-user hidden-xs hidden-sm">
                                                <a href="{{ url('/register') }}" class="zoa-icon js-user">
                                                    Register
                                                </a>
                                            </div>
                                        @endif
                                    @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- content -->
    <div class="slide v3">
        <div class="js-slider-v4">
            <div class="slide-img">
                <img src="img/slide/slider-1-home-1.png" alt="" class="img-responsive">
                <div class="box-center content2">
                    <h3>Anna Collection</h3>
                    <a href="" class="slide-btn">Shop Now</a>
                </div>
            </div>
            <div class="slide-img">
                <img src="img/slide/slider-2-home-1.png" alt="" class="img-responsive">
                <div class="box-center content1">

                </div>
            </div>

        </div>
        <div class="custom">
            <div class="pagingInfo"></div>
        </div>
    </div>
    <!-- End content -->
    <div class="trend-product pad">
        <div class="container container-content">
            <div class="row first">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="trend-img hover-images">

                        <img class="img-responsive" src="img/home1/trend.png" alt="">

                        <div class="box-center align-items-end">
                            <h3 class="zoa-category-box-title">
                                <a href="#">#trend</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="row engoc-row-equal">
                        @forelse ($productos as $producto)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                <div class="product-img" style="height: 213px; width: 213px;">
                                    <a href=""><img src="{{ asset('/storage/images/'.$producto->SKU . '.jpg') }}" alt="" class="img-responsive"></a>
                                    <div class="ribbon zoa-sale"><span>-15%</span></div>
                                    <div class="product-button-group">
                                        <a href="#" class="zoa-btn zoa-quickview">
                                            <span class="zoa-icon-quick-view"></span>
                                        </a>
                                        <a href="#" class="zoa-btn zoa-wishlist">
                                            <span class="zoa-icon-heart"></span>
                                        </a>
                                        <a href="#" class="zoa-btn zoa-addcart">
                                            <span class="zoa-icon-cart"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <h3 class="product-title">
                                        <a href="">{{ $producto->nombre }}</a>
                                    </h3>
                                    <div class="product-price">
                                        <span>S/. {{ $producto->precio }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Sin registros
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-banner">
        <div class="container container-content">
            <div class="banner-img hover-images">
                <img src="img/home1/home-1-bg.png" alt="" class="img-responsive">

                <div class="box-center">
                    <div class="content">
                        <a class="text" href="">#spring collect</a>
                        <h2>-50%</h2>
                        <a href="#" class="zoa-btn btn-shopnow">Shop Now</a>
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
    <div class="container">
        <div class="policy pad bd-top">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 policy-item">
                    <div class="policy-icon"><img src="img/policy/icon_1.png" alt=""></div>
                    <div class="policy-content">
                        <h3>Free shipping</h3>
                        <p>on all orders over $49.00</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 policy-item">
                    <div class="policy-icon"><img src="img/policy/icon_2.png" alt=""></div>
                    <div class="policy-content">
                        <h3>15 days returns</h3>
                        <p>moneyback guarantee</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 policy-item">
                    <div class="policy-icon"><img src="img/policy/icon_3.png" alt=""></div>
                    <div class="policy-content">
                        <h3>Secure checkout</h3>
                        <p>100% protected by Paypal</p>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 policy-item">
                    <div class="policy-icon"><img src="img/policy/icon_4.png" alt=""></div>
                    <div class="policy-content">
                        <h3>100% free warranty</h3>
                        <p>moneyback guarantee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer v1 bd-top">
        <div class="container">
            <div class="f-content">
                <div class="f-col">
                    <div class="social">
                        <a href=""><i class="fa fa-rss"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                        <a href=""><i class="fa fa-rss"></i></a>
                    </div>
                </div>
                <div class="f-col align-items-center">
                    <p>© 2018 <a href="">Zoa.</a></p>
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="f-col">
                    <a href=""><img src="img/credit-card-icons.png" alt="" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</div>
<a href="#" class="zoa-btn scroll_top"><i class="ion-ios-arrow-up"></i></a>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/main.js"></script>
</body>

</html>
