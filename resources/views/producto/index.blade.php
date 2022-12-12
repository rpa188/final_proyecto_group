<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            	<table id="product-table" class="table table-bordered">
            		<thead>
            			<tr>
                            <th>Id</th>
            				<th>Imagen</th>
            				<th>Categoria</th>
                            <th>Marca</th>
            				<th>Nombre</th>
            				<th>SKU</th>
            				<th>Descripcion</th>
            				<th>Precio</th>
            				<th>Acciones</th>
            			</tr>
            		</thead>
            		<tbody>
            			@forelse ($productos as $producto)
	            			<tr>
                                <td>{{ $producto->id }}</td>
	            				<td><img src="{{ asset('/storage/images/'.$producto->SKU . '.jpg') }}" alt="" title="" width="100px"></td>
	            				<td>{{ $producto->categoria->nombre }}</td>
                                <td>{{ $producto->marca->nombre }}</td>
	            				<td>{{ $producto->nombre }}</td>
	            				<td>{{ $producto->SKU }}</td>
	            				<td>{{ $producto->descripcion }}</td>
	            				<td>{{ $producto->precio }}</td>
	            				<td>
	            					<a href="{{ url('/edit-product/'.$producto->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ url('delete-product/'.$producto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="btn btn-danger" onclick="if (!confirm('¿Está seguro de eliminar el producto?')) { return false }">Delete</x-primary-button>
                                    </form>
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
