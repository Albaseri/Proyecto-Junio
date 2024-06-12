<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center opacity-80">
        <x-propios.principal>
            <div
                class="w-full max-w-4xl p-0 rounded-xl shadow-xl text-black bg-white bg-opacity-30 dark:text-black mt-5">
                <div class="bg-blue-800  w-full p-6 rounded-t-xl">
                    <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">NUEVO POST</h1>
                </div>

                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="p-8">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3">
                            <div class="mb-5">

                                <label for="titulo"
                                    class="block mb-2 text-md text-gray-900 dark:text-black font-bold">Título:</label>
                                <input type="text" id="titulo" value="{{ @old('titulo') }}"
                                    class="border-none bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                                    placeholder="Titulo..." name="titulo">
                                <x-input-error for="titulo"></x-input-error>
                            </div>


                            <div class="mb-5">
                                <label for="categoria" class="block mb-2 text-md text-black dark:text-black font-bold">Seleccione
                                    una
                                    categoría:</label>
                                <select id="category_id"
                                    class="bg-gray-50  text-center border border-blue-200 text-sm text-black rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-black"
                                    name="category_id">
                                    <option value="">Pulse para desplegar opciones</option>
                                    @foreach ($categorias as $item)
                                        <option value="{{ $item->id }}" @selected(old('category_id') == $item->id)>
                                            {{ $item->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error for="category_id"></x-input-error>
                            </div>


                            <div class="mb-6">
                                <label for="imagen"
                                    class="block mb-2 text-md text-black dark:text-black font-bold">Imagen:</label>
                                <input type="file" id="imagen"
                                    oninput="img.src=window.URL.createObjectURL(this.files[0])" name="imagen"
                                    accept="image/*" class="hidden">
                                <label for="imagen"
                                    class="cursor-pointer inline-block bg-gray-100 text-sm text-black dark:bg-blue-900 dark:border-gray-600 dark:text-white hover:bg-gray-200 hover:border-gray-400 hover:text-gray-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-cyan-500 focus-within:border-cyan-500 rounded-lg px-4 py-2">
                                    <i class="fas fa-upload mr-2"></i> Subir imagen
                                </label>
                                <div class="mt-2 w-full" id="imagen">
                                    <img src="{{ Storage::url('defecto.jpg') }}" class="w-full h-auto rounded-lg"
                                        id="img">
                                </div>
                                <x-input-error for="imagen"></x-input-error>
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <label for="contenido"
                                class="block mb-2 text-md text-black dark:text-black font-bold">Contenido:</label>
                            <textarea id="contenido"
                                class="bg-gray-50  text-black text-sm  focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                                name="contenido">{{ @old('contenido') }}</textarea>
                            <x-input-error for="contenido"></x-input-error>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6 space-x-3">
                        <a href="{{ route('postsLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800  rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> CREAR
                        </button>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>

    {{-- Incluyo CKEditor 5 desde el CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#contenido'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
