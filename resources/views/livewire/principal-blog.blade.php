<div class="bg-white font-[sans-serif]">
    <div class="max-w-7xl mx-auto py-24">
        <!-- Main Image Section -->
        @if ($posts->count())
        <div class="relative mb-16">
            <img src="{{ Storage::url($posts->first()->imagen) }}" alt="{{ $posts->first()->titulo }}" class="w-full h-auto object-cover rounded-lg">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
                <div class="text-center text-white p-6">
                    <h2 class="text-4xl font-extrabold mb-4">{{ $posts->first()->titulo }}</h2>
                    <p class="text-lg">{{ \Illuminate\Support\Str::limit(strip_tags($posts->first()->contenido), 150, '...') }}</p>
                    <a href="{{ route('detallePost', $posts->first()->id) }}" class="mt-4 bg-cyan-600 text-white py-2 px-4 rounded-lg">Saber más</a>
                </div>
            </div>
        </div>
        @endif

        <!-- Alternating Posts Section -->
        <div class="text-center mb-16">
            <h2 class="text-3xl mb-3 font-extrabold text-[#333]">ÚLTIMOS BLOGS</h2>
            <div class="mt-8 max-w-4xl mx-auto space-y-12">
                @foreach ($posts->slice(1, 4) as $index => $post)
                    <div class="relative mb-8 bg-white rounded-lg shadow-lg overflow-hidden flex flex-col {{ $index % 2 == 0 ? 'md:flex-row-reverse' : 'md:flex-row' }} items-center">
                        <img src="{{ Storage::url($post->imagen) }}" alt="{{ $post->titulo }}" class="w-full md:w-1/2 h-72 object-cover">
                        <div class="p-6 flex-1">
                            <h3 class="text-2xl font-extrabold text-[#333] mb-4">{{ $post->titulo }}</h3>
                            <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($post->contenido), 150, '...') }}</p>
                            <a href="{{ route('detallePost', $post->id) }}" class="inline-block bg-cyan-600 text-white py-2 px-4 rounded-lg">Leer más</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- More Posts Section -->
        @if ($posts->count() > 5)
        <div class="text-center mb-16">
            <h2 class="text-3xl mb-3 font-extrabold text-[#333]">SEGUIR LEYENDO</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($posts->slice(5) as $post)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        
                        <img src="{{ Storage::url($post->imagen) }}" alt="{{ $post->titulo }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <span class="text-sm block text-gray-600 mb-2">{{ $post->created_at->format('d M Y') }} |                                Entrenador Personal</span>


                            <h3 class="text-lg font-extrabold text-[#333] mb-2">{{ $post->titulo }}</h3>
                            <p class="text-gray-600 mb-2">{{ \Illuminate\Support\Str::limit(strip_tags($post->contenido), 100, '...') }}</p>
                            <a href="{{ route('detallePost', $post->id) }}" class="inline-block bg-cyan-500 text-white py-1 px-3 rounded-lg text-sm">Leer más</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
