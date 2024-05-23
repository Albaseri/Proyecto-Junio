<x-app-layout>
    <x-propios.principal>

        <header>
            <div class="w-full bg-cover bg-center h-32 rounded-2xl"
                style="height:32rem; background-image: url({{ Storage::url($post->imagen) }});">
                <div class="flex items-center justify-center h-full w-full bg-opacity-50">
                    <div class="text-center">
                        <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl mb-2">{{ $post->titulo }}</h1>

                        <p
                            class="text-black py-1 bg-cyan-100  rounded-lg hover:bg-gray-300 hover:text-gray-800 transition duration-300 border">
                            {{ $post->category->nombre }}
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="p-6 sm:container xs:container md:w-2/3 md:max-w-4xl mx-auto text-gray-800 text-lg">
            <h2>Section</h2>
            <div class="post-content">
                {{ $post->contenido }}
            </div>
            <p>
                <span class="font-bold">Categoría:</span> {{ $post->category->nombre }}
            </p>
            <p>
                <span class="font-bold">Publicado:</span> {{ $post->publicado ? 'Sí' : 'No' }}
            </p>
            <p>
                <span class="font-bold">Fecha de creación:</span> {{ $post->created_at->format('d/m/Y h:i:s') }}
            </p>
            <p>
                <span class="font-bold">Última modificación de creación:</span>
                {{ $post->updated_at->format('d/m/Y h:i:s') }}
            </p>
            <a href="{{ route('posts.index') }}"
                class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                    class="fas fa-home"></i>
                Inicio
            </a>
        </div>

    </x-propios.principal>
</x-app-layout>
