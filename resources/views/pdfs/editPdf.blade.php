<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center opacity-80">
        <x-propios.principal>
            <div class="w-full max-w-lg p-0 rounded-xl shadow-xl text-black bg-white bg-opacity-30 dark:text-black mt-5">
                <div class="bg-blue-800  w-full p-6 rounded-t-xl">
                    <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">ACTUALIZAR PDF</h1>
                </div>
                <form method="POST" action="{{ route('pdfs.update', $pdf) }}" enctype="multipart/form-data" class="p-8">
                    @csrf
                    @method('put')
                    <div class="mb-5">
                        <label for="nombre_archivo"
                            class="block mb-2 text-md font-medium text-gray-900 dark:text-black font-bold">Nombre del
                            archivo:</label>
                        <input type="text" id="nombre_archivo"
                            value="{{ @old('nombre_archivo', $pdf->nombre_archivo) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Nombre..." name="nombre_archivo">
                        <x-input-error for="nombre_archivo"></x-input-error>
                    </div>

                    <div class="mb-7">
                        <label for="ruta"
                            class="block mb-2 text-md font-medium text-gray-900 dark:text-black font-bold">Archivo
                            PDF:</label>
                        <input type="file" id="ruta" name="ruta" accept=".pdf" class="hidden">
                        <label for="ruta"
                            class="cursor-pointer inline-block bg-gray-100 text-sm text-gray-900 dark:bg-blue-900 dark:border-gray-600 dark:text-white hover:bg-gray-200 hover:border-gray-400 hover:text-gray-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-cyan-500 focus-within:border-cyan-500 rounded-lg px-4 py-2">
                            <i class="fas fa-upload mr-2"></i> Subir PDF
                        </label>
                        <span id="file-nombre" class="text-gray-700 text-sm"></span>

                        <x-input-error for="ruta"></x-input-error>
                    </div>

                    <div class="flex flex-row-reverse mt-5">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> ACTUALIZAR
                        </button>

                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>

                        <a href="{{ route('pdfsLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>
</x-app-layout>

<script>
    // Script que me muestra el nombre del archivo
    // El evento'change' se activa cuando se selecciona un archivo usando el input de tipo file cuyo id 'ruta'.
    document.getElementById('ruta').addEventListener('change', function() {
    const fileNombre = this.files[0].name; // devuelve el nombre del archivo
    document.getElementById('file-nombre').textContent = fileNombre;
});
</script>