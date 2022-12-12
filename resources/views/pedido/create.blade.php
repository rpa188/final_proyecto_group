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
                    <div id="login" class="tab-pane fadezoa in active">
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
                    <div id="register" class="tab-pane fadezoa">
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
        <div class="container container-content">
            <ul class="breadcrumb v2">
                <li><a href="#">Home</a></li>
                <li class="active">My Account</li>
            </ul>
        </div>

        <div class="check-out">
            <div class="container">
                <div class="titlell">
                    <h2>Checkout</h2>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <div class="form-name">
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
                                            <select id="cboDepartamento" name="departamento" onchange="getProvincia();">
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Provincia *</label><br>
                                            <select id="cboProvincia" name="provincia" onchange="getDistrito();">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label class="out">Distrito *</label><br>
                                            <select id="cboDistrito" name="distrito">
                                            </select>
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
                                                    <td>S/.{{ $item['producto']->precio }}</td>
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
                                    <div class="place-ober">
                                        <button onclick="submitCheckout()" class="ober">place order</button>
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
    <script>
        function submitCheckout(){
            var id_tipo_comprobante;
            var id_tipo_pago;
            var completeFormData = $('#direccionForm').serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});
            var tipo_comprobante = document.getElementsByName('id_tipo_comprobante');
            for(i = 0; i < tipo_comprobante.length; i++) {
                if(tipo_comprobante[i].checked)
                    id_tipo_comprobante = tipo_comprobante[i].value;
            }
            var tipo_pago = document.getElementsByName('id_tipo_pago');
            for(i = 0; i < tipo_pago.length; i++) {
                if(tipo_pago[i].checked)
                    id_tipo_pago = tipo_pago[i].value;
            }
            completeFormData['id_tipo_comprobante'] = id_tipo_comprobante;
            completeFormData['id_tipo_pago'] = id_tipo_pago;

            $.ajax({
                type: 'POST',
                url: '/create-order',
                data: completeFormData,
                success: function (data) {
                    window.location.href = "{{ url('/pedidos') }}"
                }
            });
        }

        getDepartamento("{{ $data['direccion']->departamento ?? '01' }}", "{{ $data['direccion']->provincia ?? '01' }}", "{{ $data['direccion']->distrito ?? '01' }}");
    </script>
</x-app-layout>
