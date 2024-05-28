<x-app-layout>
    <x-propios.principal>
        <!-- Main -->
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 lg:px-0">
                    <h2 class="text-4xl font-semibold text-white leading-tight">
                        {{ $post->titulo }}
                    </h2>
                    <div class="py-2 text-black">
                        <span>{{ $post->category->nombre }}</span>
                    </div>
                </div>
                <img src="{{ Storage::url($post->imagen) }}" class="w-full object-cover lg:rounded"
                    style="height: 28em;" />
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-12 mt-12">
                <div class="px-4 lg:px-0 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    <div class="prose max-w-none">
                        {!! $post->contenido !!}
                    </div>

                    <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
                        <p class="italic">Texo que quiero destacar</p>
                    </div>

                </div>

                <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                    <div class="p-4 border-t border-b md:border md:rounded">
                        <div class="flex py-2">
                            <img src="https://randomuser.me/api/portraits/men/97.jpg"
                                class="h-10 w-10 rounded-full mr-2 object-cover" />
                            <div>
                                <p class="font-semibold text-gray-700 text-sm">Entrenador Personal</p>
                            </div>
                        </div>
                        <p class="text-gray-700 py-3">
                            Describo autor...
                        </p>
                        <button
                            class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                            Seguir
                            <i class='bx bx-user-plus ml-2'></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sección de Artículos relacionados -->
            <div class="mt-16">
                <h2 class="text-3xl font-semibold text-gray-800 mb-8">Artículos relacionados</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($postRelacionados as $postRelacionado)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ Storage::url($postRelacionado->imagen) }}" class="w-full h-48 object-cover" />
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $postRelacionado->titulo }}</h3>
                                <p class="text-gray-600">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($postRelacionado->contenido), 100, '...') }}
                                </p>
                                <a href="{{ route('detallePost', $postRelacionado->id) }}"
                                    class="text-blue-500 hover:underline mt-2 block">Leer en{{ rand(2, 15) }}
                                    minutos</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sección Newsletter  -->
            <div class="mt-16 bg-gray-100 p-8 rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800">Suscríbete a la revista r</h2>
                <p class="text-gray-600 mt-2"> Mantente al día de las últimas novedades sobre ejercicio, nutrición,
                    hábitos de vida saludable y mucho más.</p>
                <form class="mt-4 flex">
                    <input type="email" placeholder="Enter your email"
                        class="w-full p-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r-lg">Subscríbete</button>
                </form>
            </div>
        </main>
    </x-propios.principal>
</x-app-layout>
