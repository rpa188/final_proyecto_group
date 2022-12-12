<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div style="float: right" class="p-3">
                    <button type="button" class="btn btn-success btn-lg" onclick="window.location.href='/add-brand';">Crear Marca</button>
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
                    @forelse ($marcas as $marca)
                        <tr>
                            <td style="text-align: center">{{ $loop->iteration }}</td>
                            <td>{{ $marca->nombre }}</td>
                            <td>{{ $marca->descripcion }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('/edit-brand/'.$marca->id) }}" class="btn btn-warning">Editar</a>
                                <br>
                                @can('create-users')
                                    <form action="{{ url('delete-brand/'.$marca->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button class="btn btn-danger" onclick="if (!confirm('¿Está seguro de eliminar la marca?')) { return false }">Delete</x-primary-button>
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
