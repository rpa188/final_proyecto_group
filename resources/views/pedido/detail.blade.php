<x-app-layout>
    <div class="wrappage">
        <div class="check-out">
            <div class="container">
                <div class="titlell">
                    <h2>Detalle Pedido #{{ $data['pedido']->id }}</h2>
                </div>
                @if($data['pedido']->id_status_pedido == 2)
                    <div class="row">
                        <strong>Pedido Cancelado. Generar nuevo pedido</strong>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-name">

                            <div class="billing">
                                <h2 style="font-size: 26px; padding-bottom:20px;font-weight: bold">billing details</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Nombre</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->nombre ?? "" }}</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Apellido</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->apellido ?? "" }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Correo Electrónico</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->email ?? "" }}</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Celular</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->celular ?? "" }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Calle/Av/Jr</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->direccion ?? "" }}</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Numero</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->numero ?? "" }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Departamento</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->ubigeo->dpto ?? "" }}</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Provincia</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->ubigeo->prov ?? "" }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Distrito</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->ubigeo->distrito ?? "" }}</label>
                                    </div>
                                    <div class="col-md-6 col-sm-6 p-3">
                                        <label class="out"><strong>Postcode/ZIP</strong></label><br>
                                        <label class="out">{{ $data['pedido']->direccion->zip_code ?? "" }}</label>
                                    </div>
                                </div>
                                <label class="out" style="margin-top:20px"><strong>Notas/Referencia</strong></label><br>
                                <label class="out">{{ $data['pedido']->direccion->descripcion_adicional ?? "" }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 ">
                        <div class="order">
                            <div class="content-order">
                                <div class="table">
                                    <h1>TU PEDIDO</h1>
                                    <table style="width: 100%;">
                                        <thead>
                                            <th>producto</th>
                                            <th>cantidad</th>
                                            <th>total</th>
                                        </thead>
                                        <tbody>
                                        @forelse ($data['itemsCart'] as $item)
                                            <tr>
                                                <td>{{ $item['producto']->nombre }}</td>
                                                <td style="text-align: right"><i class="fa fa-times" aria-hidden="true"></i>{{ $item->cantidad }}</td>
                                                <td style="text-align: right">S/.{{ $item['producto']->precio ?? 0.0 }}</td>
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
                                        <h4 class="sub-total"><strong>Tipo Comprobante</strong></h4>
                                        <span style="font-size: 16px;color:#494949"> {{ $data['pedido']->tipo_comprobante->nombre }}</span>
                                    </div>
                                    <br>

                                    <div class="payment">
                                        <h4 class="sub-total"><strong>Tipo Pago</strong></h4>
                                        <span style="font-size: 16px;color:#494949"> {{ $data['pedido']->tipo_pago->nombre }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @can('maintenance')
                    @if($data['pedido']->id_status_pedido == 2)
                        <div class="row">
                            <strong>Pedido Cancelado. No se puede cambiar su estado, generar nuevo pedido</strong>
                        </div>
                    @else
                        @if($data['pedido']->id_status_pedido == 3)
                            <div class="row">
                                <div class="col">
                                    <button id="cancel-order" class="button_mini zoa-btn" onclick="updateOrderStatus({{ $data['pedido']->id }}, 2)">
                                        Cancelar Pedido
                                    </button>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col">
                                    <button id="aprove-order" class="button_mini zoa-btn" onclick="updateOrderStatus({{ $data['pedido']->id }}, 3)">
                                        Aprobar Pedido
                                    </button>
                                    <button id="cancel-order" class="button_mini zoa-btn" onclick="updateOrderStatus({{ $data['pedido']->id }}, 2)">
                                        Cancelar Pedido
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endif
                @endcan
            </div>
        </div>
    </div>

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
    <script>
        function updateOrderStatus(idOrder, status){
            $.ajax({
                type: 'PUT',
                url: '/update-order/'+idOrder,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "status": status
                },
                success: function (data) {
                    window.location.href = "{{ url('/pedidos') }}"
                }
            });
        }
    </script>
</x-app-layout>
