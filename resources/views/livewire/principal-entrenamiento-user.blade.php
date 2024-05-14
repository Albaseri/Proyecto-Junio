<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-5 flex items-center justify-center mt-5 space-x-4">
        <!-- Botones de filtro -->
    </div>
    <h1 class="text-4xl text-center ">RUTINA DE ENTRENAMIENTO</h1>

    <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($trainingCards as $index => $item)
            <div class="card bg-gray-200 text-black rounded-lg shadow-md overflow-hidden" wire:key="{{ $item->id }}"
                wire:loading.class="opacity-50">
                <a href="#!">
                    <img class="w-full h-50 object-cover object-center rounded-t-lg"
                        src="{{ Storage::url($item->imagen) }}" alt="Imagen de entrenamiento" />
                </a>

                <div class="p-4">

                    <h1 class="text-2xl uppercase mb-4">Ejercicio {{ $index + 1 }}</h1>
                    <!-- Mostrar número de ejercicio -->
                    <h5 class="mb-2 text-xl font-medium leading-tight">{{ $item->titulo }}</h5>
                    <p>{{ $item->n_repeticiones }} repeticiones</p>
                    <p>{{ $item->n_series }} series</p>
                    <p>Enlace a Youtube: <a href="{{ $item->url_youtube }}"
                            class="text-cyan-500">{{ $item->url_youtube }}</a></p>
                </div>
                <div x-data="{ open: false }" class="accordion">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right bg-cyan-700 gap-3"
                        aria-expanded="false">
                        <span>Descripción del ejercicio</span>
                        <svg :class="{ 'rotate-200': open }" class="w-3 h-3 transition-transform duration-300 transform"
                            fill="currentColor" viewBox="0 0 10 6">
                            <path d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                    <div x-show="open"
                        class="p-5 border border-b-0 border-gray-200 dark:border-cyan-700 dark:bg-white">
                        <p class="mb-2 text-black dark:text-gray-400">{{ $item->descripcion }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
