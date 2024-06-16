<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina de Entrenamiento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1 id="titulo-rutina" class="rutina-header text-center mb-10 py-10 mt-10 ">RUTINA DE
            ENTRENAMIENTO</h1>
        <div class="flex justify-center mb-8 mt-10 space-x-6" id="botones-dias">
            <!--  Evento onclick con el que llamo a la función cerrarContenido y le paso el nº del día como argumento -->
            <button onclick="cerrarContenido(1)" class="dia-button bg-gradient-to-br  from-cyan-900 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-full text-white text-lg px-8 py-3">
                Día 1
            </button>
            <button onclick="cerrarContenido(2)" class="dia-button bg-gradient-to-br from-purple-900 to-blue-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-full text-white text-lg px-8 py-3">
                Día 2
            </button>
            <button onclick="cerrarContenido(3)" class="dia-button bg-gradient-to-br from-blue-500 to-cyan-900 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-full text-white text-lg px-8 py-3">
                Día 3
            </button>
        </div>

        {{-- DÍA 1 --}}
        <div id="contenido-dia-1" class="space-y-6">
            @if (auth()->user()->roles === 'USER' || auth()->user()->roles === 'ADMIN' || auth()->user()->roles === 'PREMIUM')
            @foreach ($trainingCards as $index => $item)
            @if ($index < 10) {{-- Muestro Las primeras 10 tarjetas para el día 1 --}} <div>
                <div class="py-4 rounded-t-lg bg-gradient-to-r from-cyan-600 to-blue-800">
                    <h2 class="ml-5 text-3xl font-bold text-white mb-2">Ejercicio {{ $index + 1 }}</h2>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">

                    <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                        <div class="text-4xl font-bold text-black">{{ $item->titulo }}</div>
                        <div class="descripcion-ejercicio">
                            <i class="fas fa-info-circle"></i>
                            <div class="text-2xl text-black my-5 italic">{{ $item->descripcion }}</div>
                        </div>
                        <div class="series-repeticiones">
                            <div>
                                <span>{{ $item->n_series }}</span>
                                <label>Series</label>
                            </div>
                            <div>
                                <span>{{ $item->n_repeticiones }}</span>
                                <label>Repeticiones</label>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                        <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}" class="h-50 w-50 object-cover rounded-lg">
                        <button onclick="abrirModal('{{ $item->url_youtube }}')" class="mt-4 text-white font-medium rounded-full text-lg px-6 py-3 bg-gradient-to-r from-blue-400 to-cyan-900 hover:from-cyan-600 hover:to-blue-600">
                            Ver demostración <i class="fas fa-play ml-2"></i>
                        </button>
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
        @if ($index >= 10 && $index < 20) {{-- Muestro las siguientes 10 tarjetas para el día 2 --}} <div>
            <div class="bg-cyan-700 bg-opacity-80 py-4 rounded-t-lg">
                <h2 class="ml-5 text-3xl font-bold text-white mb-2">Ejercicio {{ $index + 1 }}</h2>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 flex flex-col lg:flex-row items-center space-y-3 lg:space-y-0 lg:space-x-6">

                <div class="lg:flex-grow {{ $index % 2 == 0 ? 'lg:order-1' : 'lg:order-2' }}">
                    <div class="text-4xl font-bold text-gray-800">{{ $item->titulo }}</div>
                    <div class="descripcion-ejercicio">
                        <i class="fas fa-info-circle"></i>
                        <div class="text-2xl text-black my-5 italic">{{ $item->descripcion }}</div>
                    </div>
                    <div class="series-repeticiones">
                        <div>
                            <span>{{ $item->n_series }}</span>
                            <label>Series</label>
                        </div>
                        <div>
                            <span>{{ $item->n_repeticiones }}</span>
                            <label>Repeticiones</label>
                        </div>
                    </div>

                </div>
                <div class="lg:flex-shrink-0 {{ $index % 2 == 0 ? 'lg:order-3' : 'lg:order-1' }}">
                    <img src="{{ Storage::url($item->imagen) }}" alt="{{ $item->titulo }}" class="h-50 w-50 object-cover rounded-lg">
                    <button onclick="abrirModal('{{ $item->url_youtube }}')" class="mt-4 text-white font-medium rounded-full text-lg px-6 py-3 bg-gradient-to-r from-blue-400 to-cyan-900 hover:from-cyan-600 hover:to-blue-600">
                        Ver demostración <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>
    </div>
    @endif
    @endforeach
    @else
    <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-200 dark:bg-yellow-100 dark:text-yellow-500 dark:border-yellow-500" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <!-- Mensaje para cuando eres USER y no PREMIUM -->
        <div>
            <span class="font-medium">Para ver el contenido debes de ser usuario PREMIUM. <a href="{{ route('contacto.mostrar') }}"><span class="text-yellow-600"><strong>Solicitar
                            suscripción</strong></span></a>.</span>
        </div>
    </div>
    @endif
    </div>

    {{-- DÍA 3 --}}
    <div id="contenido-dia-3" class="hidden flex items-center justify-center  text-center">
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white proximamente">¡PRÓXIMAMENTE!</h2>
    </div>

    {{-- Modal --}}
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="videoModal">
        <div class="bg-white py-lg rounded-lg overflow-hidden w-full max-w-4xl h-96 relative z-50">
            <div class="p-lg-54">
                <button class="absolute top-2 right-2 text-white z-10 hover:text-2xl" onclick="cerrarModal()">x</button>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe id="videoFrame" class="w-full h-full absolute inset-0" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            // Establezco la URL del video en el iframe
            document.getElementById('videoFrame').src = embedUrl;
            // Muestro modal
            document.getElementById('videoModal').classList.remove('hidden');
            document.getElementById('videoModal').classList.add('flex');
            // Clase al body del documento para evitar el desplazamiento
            document.body.classList.add('modal-active');
        }

        // Función para cerrar el vídeo 
        function cerrarModal() {
            // Reinicio URL del vídeo
            document.getElementById('videoFrame').src = '';
            // Oculto modal
            document.getElementById('videoModal').classList.remove('flex');
            document.getElementById('videoModal').classList.add('hidden');
            // Remuevo la clase del body para permitir el desplazamiento
            document.body.classList.remove('modal-active');
        }

        //Función para cambiar el contenido según el día seleccionado
        function cerrarContenido(dia) {
            //Con hidden desaparecen los botones de los días, así como el título
            document.getElementById('contenido-dia-1').classList.add('hidden');
            document.getElementById('contenido-dia-2').classList.add('hidden');
            document.getElementById('contenido-dia-3').classList.add('hidden');
            document.getElementById('titulo-rutina').classList.add('hidden');

            //Con esta condición quiero que cuando sea el día 3 se muestre el mensaje de PRÓXIMAMENTE 
            //y desaparezcan unos segundos los botones
            if (dia === 3) {
                document.getElementById('botones-dias').classList.add('hidden');
                setTimeout(() => {
                    document.getElementById('botones-dias').classList.remove('hidden');
                }, 5000); //aparecen a los 5 sec
            }

            document.getElementById('contenido-dia-' + dia).classList.remove('hidden');
        }
    </script>
</body>

</html>