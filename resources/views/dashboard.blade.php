<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        {{-- Sidebar --}}
        <div
            class="bg-gradient-to-tl from-blue-500 via-cyan-700 to-blue-900 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in">


            {{-- Links de Navegación --}}
            <nav class="space-y-4 mt-5">

                <a href="{{ route('categoriesLiv.index') }}"
                    class="flex items-center py-2 px-4 text-xl hover:bg-cyan-500">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-tag">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path
                            d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
                    </svg>
                    Categorías
                </a>
                <a href="{{ route('postsLiv.index') }}" class="flex items-center py-2 px-4 text-xl hover:bg-cyan-500">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-grid-dots">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M19 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M5 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M19 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M5 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M19 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg>
                    Posts
                </a>
                <a href="{{ route('trainingCardsLiv.index') }}"
                    class="flex items-center py-2 px-4 text-xl hover:bg-cyan-500">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-cards">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M3.604 7.197l7.138 -3.109a.96 .96 0 0 1 1.27 .527l4.924 11.902a1 1 0 0 1 -.514 1.304l-7.137 3.109a.96 .96 0 0 1 -1.271 -.527l-4.924 -11.903a1 1 0 0 1 .514 -1.304z" />
                        <path d="M15 4h1a1 1 0 0 1 1 1v3.5" />
                        <path d="M20 6c.264 .112 .52 .217 .768 .315a1 1 0 0 1 .53 1.311l-2.298 5.374" />
                    </svg>
                    TrainingCards
                </a>
                <a href="{{ route('usersLiv.index') }}" class="flex items-center py-2 px-4 text-xl hover:bg-cyan-500 ">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                    Usuarios
                </a>
                <a href="{{ route('pdfsLiv.index') }}" class="flex items-center py-2 px-4 text-xl hover:bg-cyan-500">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                        <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                        <path d="M17 18h2" />
                        <path d="M20 15h-3v6" />
                        <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                    </svg>
                    PDFs
                </a>
            </nav>
        </div>

        <div class="flex-1">
            {{-- Header --}}
            <header class="bg-white shadow-md py-4 px-6">
                <div class="flex justify-between items-center">
                    {{-- Menu Móvil Button --}}
                    <button class="text-gray-500 focus:outline-none md:hidden">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    {{-- Título de la página --}}
                    <h2 class="text-xl font-semibold text-gray-800">Gestión administrativa</h2>

                    {{-- Menú de usuario	 --}}
                    <div class="relative">
                        <button class="flex items-center focus:outline-none">
                            <span class="mr-2">Admin</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>

                        {{-- Menú Dropdown --}}
                        <div
                            class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md overflow-hidden z-10 hidden">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Perfil</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Configuración</a>
                            <form method="POST" action="#">
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-800 hover:bg-gray-200 focus:outline-none">Cerrar
                                    Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            {{-- Main GRID --}}
            <main class="p-6 text-center border-t-2  border-cyan-600  shadow-xl grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Categorías --}}
                <a href="{{ route('categoriesLiv.index') }}"
                    class="bg-white align-content-center shadow-blue-200  shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Categorías</h3>
                    </div>
                </a>

                {{-- Posts --}}
                <a href="{{ route('postsLiv.index') }}"
                    class="bg-white shadow-blue-200 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Posts</h3>
                    </div>
                </a>
                {{-- TrainingCards --}}
                <a href="{{ route('trainingCardsLiv.index') }}"
                    class="bg-white shadow-blue-200 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">TrainingCards</h3>
                    </div>
                </a>

                {{-- Usuarios --}}
                <a href="{{ route('usersLiv.index') }}"
                    class="bg-white shadow-blue-200 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Usuarios</h3>
                    </div>
                </a>

                {{-- PDFs --}}
                <a href="{{ route('pdfsLiv.index') }}"
                    class="bg-white shadow-blue-200 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">PDFs</h3>
                    </div>
                </a>

                {{-- Entrenamiento del Usuario --}}
                <a href="{{ route('entrenamientoUser.index') }}"
                    class="bg-white shadow-blue-200 shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Entrenamiento</h3>
                    </div>
                </a>
            </main>

        </div>
    </div>
</x-app-layout>
