<x-app-layout>
    <x-propios.principal>
        <!-- Main -->
        <main class="mt-10">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 lg:px-0">
                    <h2 class="text-4xl font-semibold text-black leading-tight mb-5">
                        {{ $post->titulo }}
                    </h2>
                    <div class="py-2 my-5 text-black">
                        <span class="category-color">{{ $post->category->nombre }}</span>
                    </div>
                
                    <div class=" text-sm block text-blue-600 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" />
                        </svg>
                        <span
                            class="ml-2 text-sm block text-gray-600 mb-2 flex ">{{ $post->created_at->format('d M Y') }}
                            | <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-blue-600 mr-2"
                                fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-writing-sign">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                                <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                                <path d="M16 7h4" />
                            </svg>Entrenador Personal</span>
                    </div>
                </div>
                <img src="{{ Storage::url($post->imagen) }}" class="w-full object-cover lg:rounded"
                    style="height: 28em;" />
            </div>

            <div class="flex flex-col lg:flex-row lg:space-x-12 mt-12">

                <div class=" mr-2 italic rounded px-4 lg:px-0 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                    <div class="prose max-w-none">
                        {!! $post->contenido !!}
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
                            ¡Hola! Soy Álvaro, tu entrenador personal. Estoy aqui para ayudarte y en este blog
                            encontrarás diferentes artículos que te pueden interesar.
                        </p>
                        <button
                            class="px-2 py-1 text-gray-100 bg-blue-700 flex w-full items-center justify-center rounded">
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
                                    class="text-blue-500 hover:underline mt-2 block">Leer en {{ rand(2, 15) }}
                                    minutos</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Sección Newsletter  -->
            <div class="mt-16 bg-gray-100 p-8 rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800">Suscríbete a la revista </h2>
                <p class="text-gray-600 mt-2"> Mantente al día de las últimas novedades sobre ejercicio, nutrición,
                    hábitos de vida saludable y mucho más.</p>
                <form method="POST" action="{{ route('correo.enviar') }}" class="mt-4 flex">
                    @csrf
                    <input type="email" placeholder="Enter your email"
                        class="w-full p-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r-lg">Subscríbete</button>
                </form>
            </div>
        </main>
    </x-propios.principal>
</x-app-layout>
