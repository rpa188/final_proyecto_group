<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="py-12">

    	<x-validation-errors class="mb-4" :errors="$errors" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                	<div class="p-2">
		                <x-input-label for="nombre" :value="__('Nombre')" />

		                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" autofocus />
		            </div>
                	<div class="p-2">
		                <x-input-label for="SKU" :value="__('SKU')" />

		                <x-text-input id="SKU" class="block mt-1 w-full" type="text" name="SKU" :value="old('SKU')" autofocus />
		            </div>
                	<div class="p-2">
		                <x-input-label for="descripcion" :value="__('Descripción')" />

		                <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" autofocus />
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
                        <x-input-label for="stock" :value="__('Stock')" />

                        <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" :value="old('stock')" autofocus />
                    </div>
                	<div class="p-2">
		                <x-input-label for="precio" :value="__('Precio')" />

		                <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio')" autofocus />
		            </div>
                	<div class="p-2">
		                <x-input-label for="imagen" :value="__('Imagen')" />

		                <x-text-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" :value="old('imagen')" />

                        <img id="img-preview" src="#" alt="Vista previa" width="300px"/>
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
