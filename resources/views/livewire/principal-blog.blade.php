<div class="bg-white font-[sans-serif]">
    <div class="max-w-7xl mx-auto py-24">
        <div class="text-center">
            <h2
                class="text-3xl mb-3 font-extrabold text-[#333] inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-pink-400 after:rounded-full">
                ÚLTIMOS BLOGS</h2>
            <p class="mt-5 text-lg leading-8 text-violet-800">Descubre consejos útiles y recursos para mejorar tu
                entrenamiento personal</p>
        </div>
        <div class="mt-8">
            <form wire:submit.prevent="filterByCategory">
                <label for="category" class="block text-sm font-medium text-gray-700">Filtrar por categoría</label>
                <select id="category" wire:model="selectedCategory" name="category"
                    class="mt-1 block w-2/5 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Todas las categorías</option>
                    @foreach ($categorias as $category)
                        <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                    @endforeach
                </select>
                <button type="submit"
                    class="mt-4 inline-block bg-indigo-500 text-sm text-white px-3 py-1 rounded-md transition duration-300 hover:bg-indigo-600">Filtrar</button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 max-md:max-w-lg mx-auto">
            @foreach ($posts as $post)
                <div class="relative">
                    <div
                        class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] group">
                        <img src="{{ Storage::url($post->imagen) }}" alt="{{ $post->titulo }}"
                            class="w-full h-96 object-cover" />
                        <div class="p-6 bg-blue-100 opacity-90">
                            <span class="text-sm block text-gray-600 mb-2">{{ $post->created_at->format('d M Y') }} |
                                Entrenador Personal</span>
                            <!-- Botón "Leer más" -->
                            <a href="{{ route('detallePost', $post->id) }}"
                                class="ml-auto p-2 text-sm bg-indigo-500 rounded-xl hover:rounded-3xl hover:bg-indigo-600 transition-all duration-300 text-white">
                                Leer más
                            </a>
                            <h3 class="text-xl font-bold text-[#333]">{{ $post->titulo }}</h3>
                            <div class="absolute top-2 right-2">
                                <span
                                    class="px-2 py-1 text-sm text-white bg-indigo-500 rounded-full opacity-70">{{ $post->category->nombre }}</span>
                            </div>
                            <div
                                class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                <p class="text-gray-600 text-sm">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->contenido), 150, '...') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
