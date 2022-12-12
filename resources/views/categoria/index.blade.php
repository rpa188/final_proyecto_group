<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table id="product-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px;">Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td>
                                <a href="{{ url('/edit-category/'.$categoria->id) }}" class="btn btn-primary">Editar</a>
                                @can('create-users')
                                    <form action="{{ url('delete-category/'.$categoria->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="btn btn-danger" onclick="if (!confirm('¿Está seguro de eliminar la categoria?')) { return false }">Delete</x-primary-button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Sin registros</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
