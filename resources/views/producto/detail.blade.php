<x-app-layout>
    <style>
        .product-img{
            height: 200px;
        }
    </style>
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
    <!-- /header -->
    <!-- Content -->
    <div class="container container-content">
        <ul class="breadcrumb v2">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">{{ $data['producto']->categoria->nombre }}</li>
        </ul>
    </div>
    <div class="container container-content">
        <div class="single-product-detail">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="flex product-img-slide">
                        <div class="product-images">
                            <div class="ribbon zoa-sale"><span>-15%</span></div>
                            <div class="main-img js-product-slider">
                                <a href="#" class="hover-images effect"><img src="{{ asset('/storage/images/'.$data['producto']->SKU . '.jpg') }}" alt="photo" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="multiple-img-list-ver2 js-click-product">
                            <div class="product-col">
                                <div class="img active">
                                    <img src="{{ asset('/storage/images/'.$data['producto']->SKU . '.jpg') }}" alt="photo" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="single-product-info product-info product-grid-v2">
                        <h3 class="product-title"><a href="#">{{ $data['producto']->nombre }}</a></h3>
                        <div class="product-price">
                            <span class="old thin">S/. {{ round(($data['producto']->precio)*(100/85), 2) }}</span>
                            <span>S/. {{ $data['producto']->precio }}</span>
                        </div>
                        <div class="short-desc">
                            <p class="product-desc">{{ $data['producto']->descripcion }}</p>
                        </div>
                        <div class="single-product-button-group">
                            <div class="flex align-items-center element-button">
                                <div class="zoa-qtt">
                                    <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                    </button>
                                    <input id="itemCantidad" type="text" name="number" value="1" min="1" max="100" class="product_quantity_number js-number">
                                    <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                    </button>
                                </div>
                                <a href="#" onclick="addItemToCart({{ $data['producto']->id }})" class="zoa-btn zoa-addcart">
                                    <i class="zoa-icon-cart"></i>agregar al carrito
                                </a>
                            </div>
                            @can('create-users')
                                <div class="product-price">
                                    <span>Stock: {{ $data['producto']->movimiento->sum('cantidad') }}</span>
                                </div>
                            @endcan
                            @if($data['producto']->movimiento->sum('cantidad') < 10)
                                <div class="product-price">
                                    <span>Pocas unidades!!!</span>
                                </div>
                            @endif
                            <a href="" class="btn-wishlist">+ Add to wishlist</a>
                        </div>
                        <div class="product-tags">
                            <div class="element-tag">
                                <label>SKU :</label>
                                <span>{{ $data['producto']->SKU }}</span>
                            </div>
                            <div class="element-tag">
                                <label>Categoría :</label>
                                <a href="#">{{ $data['producto']->categoria->nombre }}</a>
                            </div>
                        </div>
                        <div class="product-social">
                            <label>Share +</label>
                            <div class="social">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                                <a href=""><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-product-tab bd-bottom">
            <ul class="tabs text-center">
                <li class="active"><a data-toggle="pill" href="#desc">Descripción</a></li>
            </ul>
            <div class="tab-content">
                <div id="desc" class="tab-pane fade in active">
                    <div class="content-desc text-center">
                        <p>{{ $data['producto']->descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-content">
            <div class="product-related">
                <h3 class="related-title text-center">Related products</h3>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">
                    @forelse ($data['recomendados'] as $recomendado)
                        <div class="product-item">
                            <div class="product-img">
                                <a href="/producto/{{ $recomendado->id }}"><img src="{{ asset('/storage/images/'.$recomendado->SKU . '.jpg') }}" alt="" class="img-responsive"></a>
                                <div class="ribbon zoa-sale"><span>-15%</span></div>
                                <div class="product-button-group">
                                    <!--<a href="#" class="zoa-btn zoa-quickview">
                                        <span class="zoa-icon-quick-view"></span>
                                    </a>
                                    <a href="#" class="zoa-btn zoa-wishlist">
                                        <span class="zoa-icon-heart"></span>
                                    </a>-->
                                    <a href="#" class="zoa-btn zoa-addcart" onclick="addItemToCart({{ $recomendado->id }}, 1)">
                                        <span class="zoa-icon-cart"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3 class="product-title">
                                    <a href="">{{ $recomendado->nombre }}</a>
                                </h3>
                                <div class="product-price">
                                    <span class="old">S/. {{ round(($recomendado->precio)*(100/85), 2) }}</span>
                                    <span>S/. {{ $recomendado->precio }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <option value="">No Item</option>
                    @endforelse
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_1.jpg" alt="" class="img-responsive"></a>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span class="old">$25.5</span>
                                <span>$20.9</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_2.jpg" alt="" class="img-responsive"></a>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span>$20.9</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_3.jpg" alt="" class="img-responsive"></a>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span class="old">$25.5</span>
                                <span>$20.9</span>
                            </div>
                            <div class="color-group">
                                <a href="#" class="circle gray"></a>
                                <a href="#" class="circle yellow active"></a>
                                <a href="#" class="circle white"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_4.jpg" alt="" class="img-responsive"></a>
                            <div class="ribbon zoa-hot"><span>hot</span></div>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span>$20.9</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_5.jpg" alt="" class="img-responsive"></a>
                            <div class="ribbon zoa-new"><span>new</span></div>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span>$20.9</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href=""><img src="img/product/related_5.jpg" alt="" class="img-responsive"></a>
                            <div class="ribbon zoa-new"><span>new</span></div>
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
                                <a href="">Grosgrain tie cotton top</a>
                            </h3>
                            <div class="product-price">
                                <span>$20.9</span>
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
    </div>
</x-app-layout>
