<!-- resources/views/livewire/training-accordion.blade.php -->

<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-4 flex items-center justify-center mt-5 space-x-4">
        <button type="button" wire:click="setCategory('pre-entreno')" class="filter-button">Pre-entreno</button>
        <button type="button" wire:click="setCategory('entrenamiento')" class="filter-button">Entrenamiento</button>
        <button type="button" wire:click="setCategory('post-entreno')" class="filter-button">Post-entreno</button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($trainingCards as $item)
            <div class="card bg-black text-white rounded-lg shadow-md overflow-hidden"
                wire:key="{{ $item->id }}"
                wire:loading.class="opacity-50">
                <a href="#!">
                    <img class="w-full h-48 object-cover object-center rounded-t-lg"
                        src="{{ Storage::url($item->imagen) }}" alt="Imagen de entrenamiento" />
                </a>
                <div class="p-4">
                    <h5 class="mb-2 text-xl font-medium leading-tight">{{ $item->titulo }}</h5>
                    <p class="mb-4 text-base">{{ $item->descripcion }}</p>
                    <p>{{ $item->n_repeticiones }} repeticiones</p>
                    <p>{{ $item->n_series }} series</p>
                    <p>Enlace a Youtube: <a href="{{ $item->url_youtube }}" class="text-cyan-200">{{ $item->url_youtube }}</a></p>
                </div>
                <div x-data="{ open: false }" class="accordion">
                    <button @click="open = !open"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        aria-expanded="false">
                        <span>Descripción</span>
                        <svg :class="{ 'rotate-180': open }" class="w-3 h-3 transition-transform duration-300 transform" fill="currentColor" viewBox="0 0 10 6">
                            <path d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                    <div x-show="open" class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-black-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $item->descripcion }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
