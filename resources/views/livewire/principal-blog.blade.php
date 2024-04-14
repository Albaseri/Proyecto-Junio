<x-propios.principal>
    <div class="bg-white min-h-screen py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nuestro Blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Descubre consejos útiles y recursos para mejorar tu entrenamiento personal.</p>
            </div>

            <div class="mx-auto w-full mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                <article class="flex max-w-xl flex-col items-start justify-between border border-gray-200 rounded-lg shadow">
                    <img class="w-full rounded-md" src="{{ Storage::url($post->imagen) }}" alt="imagen del artículo" />
                    <div class="px-5 mt-5 pb-5">

                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="{{ $post->created_at }}" class="text-gray-500">{{ $post->created_at->format('d/m/Y') }}</time>
                            <!-- Acceder a la categoría de la publicación -->
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->nombre }}</a>
                        </div>

                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->titulo }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $post->contenido }}</p>
                        </div>

                        <div class="relative mt-8 flex items-center gap-x-4">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Nombre del Autor
                                    </a>
                                </p>
                                <p class="text-gray-600">Entrenador Personal</p>
                            </div>
                            <!-- Botón de edición -->
                            @if(Auth::user()->roles === 'ADMIN')
                            <div class="ml-auto">
                                <button class="flex p-2.5 bg-yellow-500 rounded-xl hover:rounded-3xl hover:bg-yellow-600 transition-all duration-300 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    </button>
                            </div>
                            @endif
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</x-propios.principal>
