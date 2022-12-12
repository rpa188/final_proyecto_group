<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta Http-Equiv="Cache-Control" Content="no-cache">
        <meta Http-Equiv="Pragma" Content="no-cache">
        <meta Http-Equiv="Expires" Content="0">
        <meta Http-Equiv="Pragma-directive: no-cache">
        <meta Http-Equiv="Cache-directive: no-cache">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles ZOA-->
        <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/slick-theme.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="/css/styles.css">
        <!-- End Styles ZOA-->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
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
                                </div>
                            </div>
                            <div class="col-md-4 col flex justify-content-center">
                                <a href="#"><img src="img/logo.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-md-4 col flex justify-content-end">
                                <div class="topbar-left">
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
                                            <span id="cantCart" class="count cart-count">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/countdown.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $(document).ready(function () {
            const toastLiveExample = document.getElementById('liveToast');
            if('{{ session('message') }}' !== '') {
                const toast = new bootstrap.Toast(toastLiveExample);
                toast.show();
            }
            updateCartNumber(true);
        });

        function addItemToCart(idProducto, cantidad){
            if(!cantidad){
                const itemCantidad = document.querySelector('#itemCantidad');
                cantidad = itemCantidad.value;
            }

            const params = {
                id_producto: idProducto,
                cantidad: cantidad,
                "_token": "{{ csrf_token() }}"
            };
            $.ajax({
                type: 'POST',
                url: '/add-cartitem',
                data: params,
                success: function (data) {
                    console.log(data);
                    updateCartNumber(true);
                }
            });
        }

        function updateCartNumber(renderList){
            $.ajax({
                type: 'GET',
                url: '/cart',
                success: function (data) {
                    const sum = data.reduce((accumulator, object) => {
                        return accumulator + object.cantidad;
                    }, 0);

                    const cantCart = document.querySelector('#cantCart');
                    cantCart.textContent = sum;
                    if(renderList){
                        renderListaCarrito(data);
                    }
                }
            });
        }

        function renderListaCarrito(arrayData){
            var html = '';
            for(var i = 0 ; i < arrayData.length ; i++){
                html = html + '<li id="carrito_id-'+ arrayData[i].id +'" class="item-cart"><div class="product-img-wrap">' +
                    '<a href="/producto/'+ arrayData[i].producto.id +'" title="Product"><img src="{{ asset("/storage/images/") }}/'+arrayData[i].producto.SKU + '.jpg" alt="Product" class="img-responsive"></a></div>' +
                    '<div class="product-details"><div class="inner-left">' +
                    '<div class="product-name"><a href="/producto/'+ arrayData[i].producto.id +'">'+arrayData[i].producto.nombre+'</a></div>' +
                    '<div class="product-price"><span>S/.'+arrayData[i].producto.precio+'</span></div>' +
                    '<div class="cart-qtt">' +
                    '<button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="" onclick="subtractQuantity('+ arrayData[i].id +')"> <span class="minus-icon"><i class="ion-ios-minus-empty"></i></span></button>' +
                    '<input type="text" id="cantItem-'+ arrayData[i].id +'" name="number" value="'+ arrayData[i].cantidad + '" class="product_quantity_number js-number">' +
                    '<button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="" onclick="addQuantity('+ arrayData[i].id +', '+ arrayData[i].producto.id +')"> <span class="plus-icon"><i class="ion-ios-plus-empty"></i></span></button>' +
                    '</div></div></div></li>';
            }
            var ul = document.getElementById("listaCarrito");
            ul.innerHTML = html;
        }

        function subtractQuantity(idItem, idProducto){
            const cantItem = document.querySelector('#cantItem-'+idItem);
            if(cantItem.value <= 1){
                if (confirm('¿Está seguro de eliminar el producto?')) {
                    document.getElementById("carrito_id-"+idItem).remove();
                    deleteCartItem(idItem);
                }
            } else {
                var cantidadFinal = parseInt(cantItem.value) - 1;
                cantItem.value = cantidadFinal;
                updateItemNumber(idItem, idProducto, cantidadFinal);
            }
        }

        function addQuantity(idItem, idProducto){
            const cantItem = document.querySelector('#cantItem-'+idItem);
            var cantidadFinal = parseInt(cantItem.value) + 1;
            cantItem.value = cantidadFinal;
            updateItemNumber(idItem, idProducto, cantidadFinal);
        }

        function updateItemNumber(idCart, idProducto, cantidad){
            $.ajax({
                type: 'PUT',
                url: '/update-cart/'+idCart,
                data: {
                    id_producto: idProducto,
                    cantidad: cantidad,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (data) {
                    console.log(data);
                    updateCartNumber(false);
                }
            });
        }

        function deleteCartItem(idCart){
            $.ajax({
                type: 'DELETE',
                url: '/delete-cartitem/'+idCart,
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function (data) {
                    console.log(data);
                    updateCartNumber(false);
                }
            });
        }
    </script>
</html>
