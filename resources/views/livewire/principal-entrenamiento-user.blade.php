<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina de Entrenamiento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        .aspect-ratio-16/9 {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        }

        .aspect-ratio-16/9 iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-6xl text-center mb-10 py-10 mt-10 text-cyan-600 font-bold">RUTINA DE ENTRENAMIENTO</h1>

        <div class="space-y-6">
            @foreach ($trainingCards as $index => $item)
                <div>
                    <div class="bg-cyan-700 opacity-80 py-4 border-rounded-5">
                        <h2 class="ml-5 text-3xl font-bold text-white mb-2">{{ $item->titulo }}</h2>
                    </div>
                    <!-- Tarjeta para todos los índices -->
                    <div class="bg-white rounded-lg shadow-md p-2 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">
                        <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-3' }}">
                            <div class="text-8xl {{ $index % 2 == 0 ? 'text-pink-500' : 'text-blue-500' }} font-bold">
                                {{ $index + 1 }}
                            </div>
                        </div>
                        <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                            <div class="text-gray-700 text-xl my-5">
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-reload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.933 13.041a8 8 0 1 1 -9.925 -8.788c3.899 -1 7.935 1.007 9.425 4.747" /><path d="M20 4v5h-5" /></svg>
                                    <span class="font-semibold text-3xl">{{ $item->n_series }}</span>
                                    <span>series</span>
                                </div>
                                <div class="flex items-center space-x-2 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-repeat"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" /><path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" /></svg>
                                    <span class="font-semibold text-3xl">{{ $item->n_repeticiones }}</span>
                                    <span>repeticiones</span>
                                </div>
                            </div>
                            <button onclick="openModal('{{ $item->url_youtube }}')" class="mt-4 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-2xl text-sm px-5 py-2.5 text-center">
                                Demostración
                            </button>
                        </div>
                        <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                            <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}" class="h-50 w-50 object-cover rounded-lg">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="videoModal">
            <div class="bg-white rounded-lg overflow-hidden w-full max-w-2xl relative">
                <div class="p-4">
                    <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900" onclick="closeModal()">&times;</button>
                    <div class="aspect-ratio-16/9">
                        <iframe id="videoFrame" class="w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(url) {
            const videoId = new URL(url).searchParams.get("v");
            const embedUrl = `https://www.youtube.com/embed/${videoId}`;
            document.getElementById('videoFrame').src = embedUrl;
            document.getElementById('videoModal').classList.remove('hidden');
            document.getElementById('videoModal').classList.add('flex');
            document.body.classList.add('modal-active');
        }

        function closeModal() {
            document.getElementById('videoFrame').src = '';
            document.getElementById('videoModal').classList.remove('flex');
            document.getElementById('videoModal').classList.add('hidden');
            document.body.classList.remove('modal-active');
        }
    </script>
</body>

</html>
