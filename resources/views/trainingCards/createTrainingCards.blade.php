<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center opacity-80">
        <x-propios.principal>
            <div class="w-full max-w-lg p-0 rounded-xl shadow-xl text-black bg-white bg-opacity-30 dark:text-black mt-5">
                <div class="bg-blue-800  w-full p-6 rounded-t-xl">
                    <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">NUEVA TRAINING CARD</h1>
                </div>

                <form method="POST" action="{{ route('trainingCards.store') }}" enctype="multipart/form-data"
                    class="p-8">
                    @csrf
                    <div class="mb-5">
                        <label for="titulo" class="block mb-2 text-md text-black dark:text-black">Título:</label>
                        <input type="text" id="titulo" value="{{ @old('titulo') }}"
                            class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                            placeholder="Titulo..." name="titulo">
                        <x-input-error for="titulo"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="descripcion" class="block mb-2 text-md text-gray-900 dark:text-black">Descripción:
                        </label>
                        <input type="text" id="descripcion" value="{{ @old('descripcion') }}"
                            class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                            placeholder="Descripción..." name="descripcion">
                        <x-input-error for="descripcion"></x-input-error>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-1/2 mr-2">
                            <label for="n_repeticiones" class="block mb-2 text-md text-black dark:text-black">Número de
                                Repeticiones:</label>
                            <input type="number" id="n_repeticiones" value="{{ @old('n_repeticiones') }}"
                                wire:model="n_repeticiones"
                                class="bg-white text-sm text-black dark:bg-white dark:text-black focus:ring-cyan-500 focus:outline-none focus:border-cyan-500 rounded-lg px-4 py-2 w-full"
                                placeholder="Repeticiones..." name="n_repeticiones">
                            <x-input-error for="n_repeticiones" class="mt-1"></x-input-error>
                        </div>

                        <div class="w-1/2 ml-2">
                            <label for="n_series" class="block mb-2 text-md text-black dark:text-black">Número de
                                Series:</label>
                            <input type="number" id="n_series" value="{{ @old('n_series') }}" wire:model="n_series"
                                class="bg-white text-sm border border-gray-300 text-black dark:bg-white dark:text-black focus:ring-cyan-500 focus:outline-none focus:border-cyan-500 rounded-lg px-4 py-2 w-full"
                                placeholder="Series..." name="n_series">
                            <x-input-error for="n_series" class="mt-1"></x-input-error>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="url_youtube" class="block mb-2 text-md text-gray-900 dark:text-black">URL de
                            YouTube:
                        </label>
                        <input type="url" id="url_youtube" value="{{ @old('url_youtube') }}"
                            class="bg-gray-50 border-none text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full p-2.5 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-cyan-500"
                            placeholder="URL de YouTube..." name="url_youtube">
                        <x-input-error for="url_youtube"></x-input-error>
                    </div>
                    <div class="mb-4">
                        <label for="estado" class="block mb-2 text-md text-gray-900 dark:text-black">Estado:
                        </label>

                        <div class="flex items-center space-x-4">
                            <div>
                                <input id="VISIBLE" name="estado" type="radio" value="VISIBLE"
                                    class="text-cyan-500 focus:ring-cyan-500 dark:focus:ring-offset-gray-800 form-radio h-4 w-4 dark:text-cyan-500">
                                <label for="VISIBLE" class="text-md text-black dark:text-black">Visible</label>
                            </div>
                            <div>
                                <input id="NO VISIBLE" name="estado" type="radio" value="NO VISIBLE"
                                    class="text-red-500 focus:ring-red-500 dark:focus:ring-offset-gray-800 form-radio h-4 w-4 dark:text-red-500">
                                <label for="NO VISIBLE" class="text-sm text-black dark:text-black">No
                                    visible</label>
                            </div>
                        </div>
                        <x-input-error for="estado"></x-input-error>
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
                            <img src="{{ Storage::url('defecto.jpg') }}" class="w-full h-auto rounded-lg"
                                id="img">
                        </div>
                        <x-input-error for="imagen"></x-input-error>
                    </div>
                    <div class="flex flex-row-reverse mt-5">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> CREAR
                        </button>

                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>

                        <a href="{{ route('trainingCardsLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>
</x-app-layout>
