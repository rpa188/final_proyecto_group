<x-app-layout>
	<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            	<table class="table table-bordered">
            		<thead>
            			<tr>
            				<th>imagen</th>
            				<th>id_categoria</th>
            				<th>nombre</th>
            				<th>SKU</th>
            				<th>descripcion</th>
            				<th>precio</th>
            				<th>Acciones</th>
            			</tr>
            		</thead>
            		<tbody>
            			@forelse ($productos as $producto)
	            			<tr>
	            				<td><img src="{{ asset('/storage/images/'.$producto->SKU . '.jpg') }}" alt="" title="" width="100px"></td>
	            				<td>{{ $producto->id_categoria }}</td>
	            				<td>{{ $producto->nombre }}</td>
	            				<td>{{ $producto->SKU }}</td>
	            				<td>{{ $producto->descripcion }}</td>
	            				<td>{{ $producto->precio }}</td>
	            				<td>
	            					<a href="{{ url('/edit-product/'.$producto->id) }}" class="btn btn-primary">Editar</a>
	            					<a href="{{ url('/') }}" class="btn btn-danger">Eliminar</a>
	            				</td>
	            			</tr>
            			@empty
	            			<tr>
	            				<td colspan="6">Sin registros</td>
	            			</tr>
            			@endforelse
            		</tbody>
            	</table>
            </div>
        </div>
    </div>
</x-app-layout>
