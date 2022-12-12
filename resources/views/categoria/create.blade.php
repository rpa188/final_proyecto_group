<x-app-layout>
    <div class="py-12">
        <x-validation-errors class="mb-4" :errors="$errors" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <strong>Crear Categoría</strong>
                </div>
                <form action="{{ url('add-category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2">
                        <x-input-label for="nombre" :value="__('Nombre')" />

                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="descripcion" :value="__('Descripción')" />

                        <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" autofocus />
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
