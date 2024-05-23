<x-app-layout>
    <div class=" bg-gradient-to-br from-cyan-200 to-blue-600 ">
        <x-propios.principal>
            <div class="w-1/2 mx-auto p-6 rounded-xl shadow-xl text-black bg-white bg-opacity-60 dark:text-gray-200 ">
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <h1 class="mb-5 text-cyan-900 text-center font-bold">NUEVO POST</h1>
                        <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Título:</label>
                        <input type="text" id="titulo" value="{{ @old('titulo') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Titulo..." name="titulo">
                        <x-input-error for="titulo"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="contenido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Contenido:</label>
                        <textarea id="contenido"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            name="contenido">{{ @old('contenido') }}</textarea>
                        <x-input-error for="contenido"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="categoria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Seleccione una categoría:</label>
                        <select id="category_id"
                            class="bg-gray-50 border text-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="category_id">
                            <option value="">Pulse para desplegar opciones</option>
                            @foreach ($categorias as $item)
                                <option value="{{ $item->id }}" @selected(old('category_id') == $item->id)>{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="category_id"></x-input-error>
                    </div>

                    <div class="mb-6">
                        <label for="imagen" class=" rounded block mb-2 text-sm font-medium text-gray-900">Imagen:</label>
                        <input type="file" id="imagen" oninput="img.src=window.URL.createObjectURL(this.files[0])"
                            name="imagen" accept="image/*"
                            class="bg-white-50 border-lg border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-400 block w-full p-2.5 dark:bg-blue-900 dark:bg-opacity-90 dark:border-cyan-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        <div class="w-full mt-2 px-2 md:w-3/8" id="imagen">
                            <img src="{{ Storage::url('defecto.jpg') }}"
                                class="w-full h-auto md:h-72 rounded-lg object-cover border-2 border-cyan-600"
                                id="img">
                        </div>
                        <x-input-error for="imagen"></x-input-error>
                    </div>

                    <div class="flex flex-row-reverse">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> CREAR
                        </button>
                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>
                        <a href="{{ route('postsLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>

    <!-- Incluyendo CKEditor 5 desde el CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#contenido'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
