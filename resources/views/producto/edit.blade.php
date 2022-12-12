<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-validation-errors class="mb-4" :errors="$errors" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-product/'.$producto->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="id_categoria" :value="__('id_categoria')" />

                        <x-text-input id="id_categoria" class="block mt-1 w-full" type="text" name="id_categoria" :value="$producto->id_categoria" autofocus />
                    </div>
                    <div>
                        <x-input-label for="nombre" :value="__('nombre')" />

                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$producto->nombre" autofocus />
                    </div>
                    <div>
                        <x-input-label for="SKU" :value="__('SKU')" />

                        <x-text-input id="SKU" class="block mt-1 w-full" type="text" name="SKU" :value="$producto->SKU" autofocus />
                    </div>
                    <div>
                        <x-input-label for="descripcion" :value="__('descripcion')" />

                        <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="$producto->descripcion" autofocus />
                    </div>
                    <div>
                        <x-input-label for="precio" :value="__('precio')" />

                        <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="$producto->precio" autofocus />
                    </div>
                    <div>
                        <x-input-label for="imagen" :value="__('imagen')" />

                        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" :value="$producto->imagen" />
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
