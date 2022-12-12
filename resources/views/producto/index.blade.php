<x-app-layout>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div style="float: right" class="p-3">
                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='/add-product';">Crear Producto</button>
                </div>
            	<table id="product-table" class="table table-bordered">
            		<thead>
            			<tr>
                            <th>N°</th>
            				<th>Imagen</th>
            				<th>Categoria</th>
                            <th>Marca</th>
            				<th>Nombre</th>
            				<th>SKU</th>
            				<th>Descripcion</th>
                            <th>Stock</th>
            				<th>Precio</th>
            				<th>Acciones</th>
            			</tr>
            		</thead>
            		<tbody>
            			@forelse ($productos as $producto)
	            			<tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
	            				<td style="text-align: center"><img src="{{ asset('/storage/images/'.$producto->SKU . '.jpg') }}" alt="" title="" width="100px"></td>
	            				<td>{{ $producto->categoria->nombre }}</td>
                                <td>{{ $producto->marca->nombre }}</td>
	            				<td>{{ $producto->nombre }}</td>
	            				<td>{{ $producto->SKU }}</td>
	            				<td>{{ $producto->descripcion }}</td>
                                <td style="text-align: right">{{ $producto->movimiento->sum('cantidad') ?? '0' }}</td>
	            				<td style="text-align: right">S/. {{ $producto->precio }}</td>
	            				<td style="text-align: center">
	            					<a href="{{ url('/edit-product/'.$producto->id) }}" class="btn btn-warning">Editar</a>
                                    <br>
                                    @can('create-users')
                                    <form action="{{ url('delete-product/'.$producto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="btn btn-danger" onclick="if (!confirm('¿Está seguro de eliminar el producto?')) { return false }">Eliminar</x-primary-button>
                                    </form>
                                    @endcan
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
