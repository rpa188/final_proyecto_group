<!-- push menu-->
<div class="pushmenu menu-home5">
    <div class="menu-push">
        <span class="close-left js-close"><i class="ion-ios-close-empty f-40"></i></span>
        <div class="clearfix"></div>
        <!--<form role="search" method="get" id="searchform" class="searchform" action="/search">
            <div>
                <label class="screen-reader-text" for="q"></label>
                <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                <input type="hidden" name="type" value="product">
                <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
            </div>
        </form>-->
        <ul class="nav-home5 js-menubar">
            <li class="level1 active dropdown"><a href="/perfil">{{ Auth::user()->name }}</a></li>
            <li class="level1 active dropdown"><a href="/">Pagina Principal</a></li>
            <li class="level1 active dropdown"><a href="/pedidos">Mis Pedidos</a></li>
            @can('create-users')
            <li class="level1 active dropdown"><a href="#">Mantenimiento</a>
                <span class="icon-sub-menu"></span>
                <div class="menu-level1 js-open-menu">
                    <ul class="level1">
                        <li class="level2">
                            <a href="#">Productos</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="/productos" title="">Lista</a></li>
                                <li class="level3"><a href="/add-product" title="">Crear Producto</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Categorias</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="/categorias" title="">Lista</a></li>
                                <li class="level3"><a href="/add-category" title="">Crear Categoria</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Marcas</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="/marcas" title="">Lista</a></li>
                                <li class="level3"><a href="/add-brand" title="">Crear Marca</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Usuarios</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="/usuarios" title="">Lista</a></li>
                                <li class="level3"><a href="/add-usuario" title="">Crear Usuario</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </li>
            @endcan
            <li class="level1">
                <a href="#">Paginas</a>
                <span class="icon-sub-menu"></span>
                <ul class="menu-level1 js-open-menu">
                    <li class="level2"><a href="aboutus.html" title="About Us ">Acerca de</a></li>
                    <li class="level2"><a href="contactus.html" title="Contact">Contacto</a></li>
                    <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                    <li class="level2"><a href="commingsoon.html" title="Coming Soon">Proximamente</a></li>
                </ul>
            </li>
        </ul>
        <ul class="mobile-account">
            @if (Route::has('login'))
                @auth
                    <li><a href="/dashboard"><i class="fa fa-file"></i>Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="fa fa-user"></i>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                @else
                    <li><a href="/login"><i class="fa fa-unlock-alt"></i>Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="/register"><i class="fa fa-user-plus"></i>Registrar</a></li>
                    @endif
                @endauth
            @endif
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
            <ul id="listaCarrito" class="list">
            </ul>
            <div class="cart-bottom">
                <div class="cart-button mg-top-30">
                    <a class="zoa-btn checkout" href="/checkout" title="">Ir a pagar</a>
                </div>
            </div>
        </div>
        <!-- End cart bottom -->
    </div>
</div>
<!-- End pushcart -->
