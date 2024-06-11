<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina de Entrenamiento</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-6xl text-center mb-10 py-10 mt-10 text-cyan-600 font-bold">RUTINA DE ENTRENAMIENTO</h1>
        <div class="flex justify-center mb-8 space-x-6">
            <button onclick="cerrarContenido(1)"
                class="dia-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 1
            </button>
            <button onclick="cerrarContenido(2)"
                class="dia-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 2
            </button>

            <button onclick="cerrarContenido(3)"
                class="dia-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 3
            </button>
        </div>

        {{-- DÍA 1  --}}
        <div id="contenido-dia-1" class="space-y-6">
            @if (auth()->user()->roles === 'USER' || auth()->user()->roles === 'ADMIN' || auth()->user()->roles === 'PREMIUM')
                @foreach ($trainingCards as $index => $item)
                    @if ($index < 10)
                        {{-- Muestro Las primeras 10 tarjetas para el día 1 --}}
                        <div>
                            <div class="py-4 rounded-t-lg  bg-gradient-to-r from-cyan-600 to-blue-800 ">
                                <h2 class="ml-5 text-3xl font-bold text-white mb-2">Ejercicio {{ $index + 1 }}</h2>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md p-4 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">
                                <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-3' }}">
                                    <div
                                        class="text-5xl {{ $index % 2 == 0 ? 'text-pink-500' : 'text-blue-500' }} font-bold">
                                    </div>
                                </div>
                                <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                                    <div class="text-4xl font-bold text-black">{{ $item->titulo }}</div>
                                    <div class="text-base text-xl my-5 text-black"><span
                                            class="text-bold text-2xl">{{ $item->n_series }}</span> series -
                                        {{ $item->n_repeticiones }} repeticiones</div>
                                    <button onclick="abrirModal('{{ $item->url_youtube }}')"
                                        class="mt-4 text-white font-medium rounded-lg text-lg px-6 py-3 bg-gradient-to-r from-blue-400 to-cyan-500 hover:from-cyan-600 hover:to-blue-600">
                                        Ver demostración <i class="fas fa-play ml-2"></i>
                                    </button>
                                </div>
                                <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                                    <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}"
                                        class="h-50 w-50 object-cover rounded-lg">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>

        {{-- DÍA 2 --}}

        <div id="contenido-dia-2" class="hidden space-y-6">
            @if (auth()->user()->roles === 'PREMIUM' || auth()->user()->roles === 'ADMIN')
                @foreach ($trainingCards as $index => $item)
                    @if ($index >= 10 && $index < 20)
                    
                        {{-- Muestro las siguientes 10 tarjetas para el día 2 --}}
                        <div>
                            <div class="bg-cyan-700 bg-opacity-80 py-4 rounded-t-lg">
                                <h2 class="ml-5 text-3xl font-bold text-white mb-2">Ejercicio {{ $index + 1 }}</h2>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md p-4 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">
                                <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-3' }}">
                                    <div
                                        class="text-5xl {{ $index % 2 == 0 ? 'text-pink-500' : 'text-blue-500' }} font-bold">
                                    </div>
                                </div>
                                <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                                    <div class="text-4xl font-bold text-gray-800">{{ $item->titulo }}</div>
                                    <div class="text-base text-2xl my-5 text-gray-600">{{ $item->n_series }} series -
                                        {{ $item->n_repeticiones }} repeticiones</div>
                                    <button onclick="abrirModal('{{ $item->url_youtube }}')"
                                        class="mt-4 text-white font-medium rounded-lg text-lg px-6 py-3 bg-gradient-to-r from-blue-400 to-cyan-200 hover:from-cyan-600 hover:to-blue-600">
                                        Ver demostración <i class="fas fa-play ml-2"></i>
                                    </button>
                                </div>
                                <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                                    <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}"
                                        class="h-50 w-50 object-cover rounded-lg">
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="text-center text-3xl text-red-600">
                    ¡Tienes que ser premium para tener acceso! No lo pienses más y únete.
                </div>
            @endif
        </div>

        {{-- DÍA 3 --}}
        <div id="contenido-dia-3" class="hidden flex items-center justify-center mt-5 text-center">
            <div>
                <h2 class="text-7xl font-bold text-neon text-white">¡PRÓXIMAMENTE!</h2>
                <p class="text-4xl mt-4 text-black">Nuevas sorpresas y entrenamientos en camino.</p>
            </div>
        </div>


        <!-- Modal -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="videoModal">
            <div class="bg-white rounded-lg overflow-hidden w-full max-w-4xl h-96 relative">
                <div class="p-4">
                    <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                        onclick="cerrarModal()">&times;</button>
                    <div class="aspect-w-16 aspect-h-90">
                        <iframe id="videoFrame" class="w-full h-full absolute inset-0" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Función para abrir el vídeo de youtube
        function abrirModal(url) {
            // Extraigo el ID del video de YouTube desde la URL
            const videoId = new URL(url).searchParams.get("v");
            // Forma la URL de embebido del video
            const embedUrl = `https://www.youtube.com/embed/${videoId}`;
            // Establecer la URL del video en el iframe
            document.getElementById('videoFrame').src = embedUrl;
            // Muestro modal
            document.getElementById('videoModal').classList.remove('hidden');
            document.getElementById('videoModal').classList.add('flex');
            // Clase al body del documento para evitar el desplazamiento
            document.body.classList.add('modal-active');
        }

        // Función para cerrar el vídeo de youtube

        function cerrarModal() {
            // Reinicio URL del vídeo
            document.getElementById('videoFrame').src = '';
            // Oculto modal
            document.getElementById('videoModal').classList.remove('flex');
            document.getElementById('videoModal').classList.add('hidden');
            // Remuevo la clase del body para permitir el desplazamiento
            document.body.classList.remove('modal-active');
        }


        function cerrarContenido(dia) {
            document.getElementById('contenido-dia-1').classList.add('hidden');
            document.getElementById('contenido-dia-2').classList.add('hidden');
            document.getElementById('contenido-dia-3').classList.add('hidden');

            document.getElementById('contenido-dia-' + dia).classList.remove('hidden');
        }
    </script>
</body>

</html>
