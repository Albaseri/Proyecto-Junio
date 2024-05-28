<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center opacity-80">
        <x-propios.principal>
            <div
                class="w-full max-w-lg p-8 rounded-xl shadow-xl text-black bg-white bg-opacity-30 dark:text-black  mt-5">

                <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <h1 class="mb-8 text-2xl font-bold text-center text-gray-900 dark:text-black">ACTUALIZAR POST
                        </h1>
                        <label for="titulo" class="block mb-2 text-md  text-black dark:text-black">Título:</label>
                        </label>
                        <input type="text" id="titulo" value="{{ @old('titulo', $post->titulo) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Titulo..." name="titulo">
                        <x-input-error for="titulo"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="contenido"
                            class="block mb-2 text-md text-gray-900 dark:text-black">Contenido:</label>
                        <textarea id="contenido"
                            class="bg-gray-50  text-gray-900 text-sm  focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            name="contenido">{{ @old('contenido', $post->contenido) }}</textarea>
                        <x-input-error for="contenido"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="categoria" class="block mb-2 text-mdtext-gray-900 dark:text-black">Seleccione una
                            categoría:</label>
                        <select id="category_id"
                            class="bg-gray-50  text-center border border-blue-200 text-sm text-gray-900  rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-black"
                            name="category_id">
                            @foreach ($categorias as $item)
                                <option value="{{ $item->id }}"
                                    {{ $item->id == $post->category_id ? 'selected' : '' }}>{{ $item->nombre }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="category_id"></x-input-error>
                    </div>


                    <div class="mb-6">

                        <label for="imagen" class="block mb-2 text-md text-black dark:text-black">Imagen:</label>
                        <input type="file" id="imagen" oninput="img.src=window.URL.createObjectURL(this.files[0])"
                            name="imagen" accept="image/*" class="hidden">
                        <label for="imagen"
                            class="cursor-pointer inline-block bg-gray-100 text-sm text-gray-900 dark:bg-blue-900 dark:border-gray-600 dark:text-white hover:bg-gray-200 hover:border-gray-400 hover:text-gray-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-cyan-500 focus-within:border-cyan-500 rounded-lg px-4 py-2">
                            <i class="fas fa-upload mr-2"></i> Subir imagen
                        </label>
                        <div class="mt-2">
                            <img src="{{ Storage::url($post->imagen) }}" class="w-full h-auto rounded-lg"
                                id="img" />
                        </div>
                        <x-input-error for="imagen"></x-input-error>

                    </div>

                    <div class="flex flex-row-reverse">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> EDITAR
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
