<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div style="float: right" class="p-3">
                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='/add-category';">Crear Categoría</button>
                </div>
                <table id="product-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($categorias as $categoria)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('/edit-category/'.$categoria->id) }}" class="btn btn-warning">Editar</a>
                                <br>
                                @can('create-users')
                                    <form action="{{ url('delete-category/'.$categoria->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="btn btn-danger" onclick="if (!confirm('¿Está seguro de eliminar la categoria?')) { return false }">Eliminar</x-primary-button>
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
