<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="py-12">
        <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <strong>Editar Usuario</strong>
                </div>
                <form action="{{ url('update-personaldata/'.$data['personaldata']->id.'/2') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-2">
                        <x-input-label for="nombre" :value="__('Nombre')" />
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$data['personaldata']->nombre" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="ape_paterno" :value="__('Apellido Paterno')" />
                        <x-text-input id="ape_paterno" class="block mt-1 w-full" type="text" name="ape_paterno" :value="$data['personaldata']->ape_paterno" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="ape_materno" :value="__('Apellido Materno')" />
                        <x-text-input id="ape_materno" class="block mt-1 w-full" type="text" name="ape_materno" :value="$data['personaldata']->ape_materno" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="id_tipo_documento" :value="__('Tipo Documento')" />
                        <x-text-input id="id_tipo_documento" class="block mt-1 w-full" type="text" name="id_tipo_documento" :value="$data['personaldata']->id_tipo_documento" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="numero_documento" :value="__('Numero Documento')" />
                        <x-text-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento" :value="$data['personaldata']->numero_documento" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')" />
                        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="$data['personaldata']->fecha_nacimiento" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="celular" :value="__('Celular')" />
                        <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="$data['personaldata']->celular" autofocus />
                    </div>
                    <div class="p-2">
                        <x-primary-button class="ml-3">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
