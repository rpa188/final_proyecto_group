<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-validation-errors class="mb-4" :errors="$errors" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add-user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2">
                        <x-input-label for="nombre" :value="__('Nombre')" />
                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="ape_paterno" :value="__('Apellido Paterno')" />
                        <x-text-input id="ape_paterno" class="block mt-1 w-full" type="text" name="ape_paterno" :value="old('ape_paterno')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="ape_materno" :value="__('Apellido Materno')" />
                        <x-text-input id="ape_materno" class="block mt-1 w-full" type="text" name="ape_materno" :value="old('ape_materno')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="id_tipo_documento" :value="__('Tipo Documento')" />
                        <x-text-input id="id_tipo_documento" class="block mt-1 w-full" type="text" name="id_tipo_documento" :value="old('id_tipo_documento')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="numero_documento" :value="__('Numero Documento')" />
                        <x-text-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento" :value="old('numero_documento')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')" />
                        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="text" name="fecha_nacimiento" :value="old('fecha_nacimiento')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="celular" :value="__('Celular')" />
                        <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-primary-button class="ml-3">
                            {{ __('Guardar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
