<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mb-4 flex items-center justify-center mt-5 space-x-4">
        <button type="button" class="filter-button" data-category="pre-entreno">Pre-entreno</button>
        <button type="button" class="filter-button" data-category="entrenamiento">Entrenamiento</button>
        <button type="button" class="filter-button" data-category="post-entreno">Post-entreno</button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6" id="training-cards-container">
        @foreach ($trainingCards as $item)
            <div class="card bg-black text-white rounded-lg shadow-md overflow-hidden"
                data-category="{{ strtolower($item->categoria) }}">
                <a href="#!">
                    <img class="w-full h-48 object-cover object-center rounded-t-lg"
                        src="{{ Storage::url($item->imagen) }}" alt="Imagen de entrenamiento"/>
                </a>
                <div class="p-4">
                    <h5 class="mb-2 text-xl font-medium leading-tight">{{ $item->titulo }}</h5>
                    <p class="mb-4 text-base">{{ $item->descripcion }}</p>
                    <p>Número de repeticiones: {{ $item->n_repeticiones }}</p>
                    <p>Número de series: {{ $item->n_series }}</p>
                    <p>Enlace a Youtube: <a href="{{ $item->url_youtube }}"
                            class="text-cyan-200">{{ $item->url_youtube }}</a></p>
                </div>
            </div>
        @endforeach
    </div>
</div>
