<x-app-layout>
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

    <div class="container container-content">
        <ul class="breadcrumb v2">
            <li><a href="#">Home</a></li>
            <li class="active">My Account</li>
        </ul>
    </div>
    <div class="my-account">
        <div class="container">
            <h2>Hola, <strong> {{ $data['personal_data']->nombre ?? "" }}!</strong></h2>
            <div class="row">
                <div class="col-md-12 col-sm-12 porfolio">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#personal-data">Datos Personales</a></li>
                        <li><a href="#shipping-address">Dirección de Envío</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="personal-data" class="tab-pane fade in active">
                            <div class="form">
                                <form action="{{ url('update-personaldata/'.($data['personal_data']->id ?? "0")) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label class="out">Nombre<span style="color:#f33">*</span></label><br>
                                            <input type="text" name="nombre" placeholder="Ingrese Nombre" required class="district" value="{{ $data['personal_data']->nombre ?? "" }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Apellido Paterno<span style="color:#f33">*</span></label><br>
                                            <input type="text" name="ape_paterno" placeholder="Ingrese Apellido Paterno" required class="district" value="{{ $data['personal_data']->ape_paterno ?? "" }}">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Apellido Materno<span>*</span></label><br>
                                            <input type="text" name="ape_materno" placeholder="Ingrese Apellido Materno" required class="district" value="{{ $data['personal_data']->ape_materno ?? "" }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Tipo de Documento<span style="color:#f33">*</span></label><br>
                                            <input type="text" name="id_tipo_documento" placeholder="Ingrese Tipo de Documento" required class="district" value="{{ $data['personal_data']->id_tipo_documento ?? "" }}">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Número de Documento<span>*</span></label><br>
                                            <input type="text" name="numero_documento" placeholder="Ingrese Numero de Documento" required class="district" value="{{ $data['personal_data']->numero_documento ?? "" }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Fecha de Nacimiento<span style="color:#f33">*</span></label><br>
                                            <input type="date" name="fecha_nacimiento" placeholder="Ingrese Fecha de Nacimiento" required class="district" value="{{ $data['personal_data']->fecha_nacimiento ?? "" }}">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Celular<span>*</span></label><br>
                                            <input type="text" name="celular" placeholder="Ingrese Celular" required class="district" value="{{ $data['personal_data']->celular ?? "" }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="change">Guardar Cambios</button>
                                </form>
                            </div>
                        </div>
                        <div id="shipping-address" class="tab-pane fade in">
                            <div class="form">
                                <form action="{{ url('update-direccion/'.($data['direccion']->id ?? "0")) }}" method="POST">
                                    @csrf
                                    @method('PUT')
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
                                    <button class="change">Guardar Cambios</button>
                                </form>
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



    </div>
</x-app-layout>
