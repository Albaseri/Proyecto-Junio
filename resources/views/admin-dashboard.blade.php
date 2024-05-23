<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div
            class="bg-gradient-to-tl from-blue-500 via-cyan-700 to-blue-900 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in">
            <!-- Logo -->
            <a href="#" class="text-3xl font-semibold text-white flex items-center space-x-2 px-4">
                <svg class="h-8 w-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <!-- Your logo SVG here -->
                </svg>
                <span>Panel</span>
            </a>

            <!-- Navigation Links -->
            <nav>
                <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <svg class="h-5 w-5 text-white mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 14l9-5-9-5-9 5 9 5zM12 14V3"></path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('categoriesLiv.index') }}"
                    class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <i class="fa-solid fa-tag text-xl me-2" style="color: #c2c2c2;"></i>

                    Categorías
                </a>
                <a href="{{ route('postsLiv.index') }}" class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <svg class="mr-2 flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    Posts
                </a>
                <a href="{{ route('trainingCardsLiv.index') }}"
                    class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <svg class="mr-2 flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M18 0H6a2 2 0 0 0-2 2h14v12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Z" />
                        <path
                            d="M14 4H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2ZM2 16v-6h12v6H2Z" />
                    </svg>
                    TrainingCards
                </a>
                <a href="{{ route('usersLiv.index') }}" class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <i class="fa-solid fa-users  text-xl me-2" style="color: #c2c2c2;"></i>

                    Usuarios
                </a>
                <a href="{{ route('pdfsLiv.index') }}" class="flex items-center py-2 px-4 text-sm hover:bg-blue-700">
                    <i class="fa-regular fa-file-pdf text-xl me-2" style="color: #c2c2c2; "></i>

                    PDFs
                </a>
                <!-- Add more navigation links as needed -->
            </nav>
        </div>

        <!-- Content Area -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 px-6">
                <div class="flex justify-between items-center">
                    <!-- Mobile Menu Button -->
                    <button class="text-gray-500 focus:outline-none md:hidden">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    <!-- Page Title -->
                    <h2 class="text-xl font-semibold text-gray-800">Gestión administrativa</h2>

                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center focus:outline-none">
                            <span class="mr-2">Admin</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div
                            class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md overflow-hidden z-10 hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-200">Perfil</a>
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


            <!-- Main Content -->
            <main class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Categorías -->
                <a href="{{ route('categoriesLiv.index') }}"
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Categorías</h3>
                        <!-- Agrega aquí el contenido relacionado con las categorías -->
                    </div>
                </a>

                <!-- Posts -->
                <a href="{{ route('postsLiv.index') }}"
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Posts</h3>
                        <!-- Agrega aquí el contenido relacionado con los posts -->
                    </div>
                </a>

                <!-- TrainingCards -->
                <a href="{{ route('trainingCardsLiv.index') }}"
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">TrainingCards</h3>
                        <!-- Agrega aquí el contenido relacionado con las TrainingCards -->
                    </div>
                </a>

                <!-- Usuarios -->
                <a href="{{ route('usersLiv.index') }}"
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">Usuarios</h3>
                        <!-- Agrega aquí el contenido relacionado con los usuarios -->
                    </div>
                </a>

                <!-- PDFs -->
                <a href="{{ route('pdfsLiv.index') }}"
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition duration-300 ease-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">PDFs</h3>
                        <!-- Agrega aquí el contenido relacionado con los PDFs -->
                    </div>
                </a>
            </main>

        </div>
    </div>
</x-app-layout>
