<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="py-12">
        <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <strong>Editar Marca</strong>
                </div>
                <form action="{{ url('update-brand/'.$marca->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-2">
                        <x-input-label for="nombre" :value="__('nombre')" />

                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$marca->nombre" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="descripcion" :value="__('descripcion')" />

                        <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="$marca->descripcion" autofocus />
                    </div>
                    <div>
                        <x-primary-button class="ml-3">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
