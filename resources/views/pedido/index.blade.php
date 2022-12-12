<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table id="product-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px;">Id</th>
                        <th>Precio</th>
                        <th>Direccion</th>
                        <th>Tipo Comprobante</th>
                        <th>Tipo Pago</th>
                        <th>Status</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->precio }}</td>
                            <td>{{ $pedido->direccion->direccion }}</td>
                            <td>{{ $pedido->tipo_comprobante->nombre }}</td>
                            <td>{{ $pedido->tipo_pago->nombre }}</td>
                            <td>{{ $pedido->id_status_pedido }}</td>
                            <td>{{ $pedido->created_at }}</td>
                            <td>
                                <a href="{{ url('/pedido/'.$pedido->id) }}" class="btn btn-primary">Detalles</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">Sin registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
