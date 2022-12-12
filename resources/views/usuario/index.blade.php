<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table id="product-table" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 20px;">Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Celular</th>
                        <th>Tipo Documento</th>
                        <th>Numero Documento</th>
                        <th>Creado por</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($personal_data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->ape_paterno }}</td>
                            <td>{{ $item->ape_materno }}</td>
                            <td>{{ $item->celular }}</td>
                            <td>{{ ($item->id_tipo_documento=="1")?"DNI":"N/A" }}</td>
                            <td>{{ $item->numero_documento }}</td>
                            <td>{{ $item->usuario_creador->name }}</td>
                            <td>
                                <a href="{{ url('/edit-usuario/'.$item->id) }}" class="btn btn-primary">Editar</a>
                                @can('create-users')
                                    <form action="{{ url('delete-usuario/'.$item->id) }}" method="POST">
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
