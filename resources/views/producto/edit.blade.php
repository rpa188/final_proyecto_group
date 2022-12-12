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
                <form action="{{ url('update-product/'.$data['producto']->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-2">
                        <x-input-label for="nombre" :value="__('nombre')" />

                        <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$data['producto']->nombre" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="SKU" :value="__('SKU')" />

                        <x-text-input id="SKU" class="block mt-1 w-full" type="text" name="SKU" :value="$data['producto']->SKU" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="descripcion" :value="__('descripcion')" />

                        <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="$data['producto']->descripcion" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="id_categoria" :value="__('Categoría')" />

                        <select name="id_categoria" class="form-select" aria-label="Default select example">
                            @forelse ($data['categoria'] as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @empty
                                <option value="">No Item</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="p-2">
                        <x-input-label for="id_marca" :value="__('Marca')" />

                        <select name="id_marca" class="form-select" aria-label="Default select example">
                            @forelse ($data['marca'] as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @empty
                                <option value="">No Item</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="p-2">
                        <x-input-label for="stock" :value="__('stock')" />

                        <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" :value="$data['producto']->stock->stock ?? 0" autofocus />
                    </div>
                    <div class="p-2">
                        <x-input-label for="precio" :value="__('precio')" />
                        @can('create-users')
                        <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="$data['producto']->precio" autofocus />
                        @endcan
                        <h1 @can('create-users')style="display: none;"@endcan>{{ $data['producto']->precio }}</h1>
                    </div>
                    <div class="p-2">
                        <x-input-label for="imagen" :value="__('imagen')" />

                        <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" :value="$data['producto']->imagen" />

                        <img id="img-preview" src="{{ asset('/storage/images/'.$data['producto']->SKU . '.jpg') }}" alt="Vista previa" width="300px" style="margin-top: 20px;"/>
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
    <script>
        var imgInp = document.getElementById('imagen');
        var imgPrw = document.getElementById('img-preview');
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                imgPrw.src = URL.createObjectURL(file)
            }
        }
    </script>
</x-app-layout>
