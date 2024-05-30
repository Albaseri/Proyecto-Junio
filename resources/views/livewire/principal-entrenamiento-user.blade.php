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
            <button
                class="day-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 1
            </button>
            <button
                class="day-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 2
            </button>
            <button
                class="day-button bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-white text-lg px-8 py-3">
                Día 3
            </button>
        </div>

        <div class="space-y-6">
            @foreach ($trainingCards as $index => $item)
                <div>
                    <div class="bg-cyan-700 bg-opacity-80 py-4 rounded-t-lg">
                        <h2 class="ml-5 text-3xl font-bold text-white mb-2">{{ $item->titulo }}</h2>
                    </div>
                    <!-- Tarjeta para todos los índices -->
                    <div
                        class="bg-white rounded-lg shadow-md p-4 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">
                        <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-3' }}">
                            <div class="text-5xl {{ $index % 2 == 0 ? 'text-pink-500' : 'text-blue-500' }} font-bold">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                        </div>
                        <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                            <div class="text-4xl font-bold text-gray-800">{{ $item->titulo }}</div>
                            <div class="text-base  text-2xl my-5 text-gray-600">{{ $item->n_series }} series -
                                {{ $item->n_repeticiones }} repeticiones</div>
                            <button onclick="openModal('{{ $item->url_youtube }}')"
                                class="mt-4 text-white demo-btn font-medium rounded-lg text-lg px-6 py-3 bg-blue-500 hover:bg-blue-600">
                                Ver demostración <i class="fas fa-play ml-2"></i>
                            </button>
                        </div>
                        <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                            <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}"
                                class="h-50 w-50 object-cover rounded-lg">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="videoModal">
            <div class="bg-white rounded-lg overflow-hidden w-full max-w-2xl relative">
                <div class="p-4">
                    <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                        onclick="closeModal()">&times;</button>
                    <div class="aspect-ratio-16/9">
                        <iframe id="videoFrame" class="w-full h-full" src="" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(url) {
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

        function closeModal() {
            // Reinicio URL del vídeo
            document.getElementById('videoFrame').src = '';
            // Oculto modal
            document.getElementById('videoModal').classList.remove('flex');
            document.getElementById('videoModal').classList.add('hidden');
            // Remuevo la clase del body para permitir el desplazamiento
            document.body.classList.remove('modal-active');
        }
    </script>
</body>

</html>
