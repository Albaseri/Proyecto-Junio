<x-app-layout>
    <div class="bg-gradient-to-br from-cyan-200 to-black min-h-screen">
        <x-propios.principal>
            <div class="w-1/2 mx-auto p-6 rounded-xl shadow-xl text-black bg-gray-100 dark:text-gray-200 mt-5">
                   <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <h1 class="mb-5 text-black text-center font-bold">NUEVA CATEGORÍA</h1>
                        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nombre:
                        </label>
                        <input type="text" id="nombre" value="{{ @old('nombre') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Nombre..." name="nombre">
                    </div>
                    <x-input-error for="nombre"></x-input-error>


                    <div class="mb-5">
                        <label for="descripcion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Descripción: </label>
                        <input type="descripcion" id="descripcion" value="{{ @old('descripcion') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Descripción..." name="descripcion">
                    </div>
                    <x-input-error for="descripcion"></x-input-error>

                    <div class="flex flex-row-reverse">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> CREAR
                        </button>

                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>

                        <a href="{{ route('categoriesLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>
</x-app-layout>
