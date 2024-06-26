<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-900 to-cyan-800">
    <!-- Primary Navigation Menu -->
    <div class="max-w-10xl mx-auto px-4 sm:px-4 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ Storage::url('logo.png') }}" class="object-cover h-10 w-20 sm:h-12 sm:w-24 md:h-16 md:w-32 lg:h-20 lg:w-40">
                    </a>
                </div>
            </div>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                    {{ __('INICIO') }}
                </x-nav-link>
                <x-nav-link href="{{ route('blogLiv.index') }}" :active="request()->routeIs('blogLiv')">
                    {{ __('BLOG') }}
                </x-nav-link>
                <x-nav-link href="{{ route('contacto.mostrar') }}" :active="request()->routeIs('contacto.mostrar')">
                    {{ __('CONTACTO') }}
                </x-nav-link>

                @auth
                @if (auth()->user()->roles === 'USER' || auth()->user()->roles === 'PREMIUM')
                <x-nav-link href="{{ route('entrenamientoUser.index') }}" :active="request()->routeIs('entrenamientoUser')">
                    {{ __('MI ENTRENAMIENTO') }}
                </x-nav-link>
                @endif
                @endauth
            </div>

            @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar cuenta') }}
                            </div>

                            <!-- <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Perfil') }}
                            </x-dropdown-link> -->

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            @else
            @if (Route::has('login'))
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-cyan-200">Inicio</a>
                @else
                <a href="{{ route('login') }}" class="font-semibold text-white hover:bg-blue-500 hover:text-white  py-2 px-2 border-2 rounded-full border-cyan-500">Iniciar Sesión</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:bg-blue-500 hover:text-white  py-2 px-2 border-2 rounded-full border-cyan-500">Registrarse</a>
                @endif
                @endauth
            </div>
            @endif
            @endauth

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
                {{ __('Inicio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('blogLiv.index') }}" :active="request()->routeIs('blogLiv.index')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('contacto.mostrar') }}" :active="request()->routeIs('contacto.mostrar')">
                {{ __('Contacto') }}
            </x-responsive-nav-link>

            @auth
            @if (auth()->user()->roles === 'USER' || auth()->user()->roles === 'PREMIUM')
            <x-responsive-nav-link href="{{ route('entrenamientoUser.index') }}" :active="request()->routeIs('entrenamientoUser')">
                {{ __('Mi Entrenamiento') }}
            </x-responsive-nav-link>
            @endif
            @endauth
        </div>

        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-cyan-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-blue-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- <x-responsive-nav-link href="{{ route('profile.show') }}">
                    {{ __('Perfil') }}
                </x-responsive-nav-link> -->

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-responsive-nav-link href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Cerrar Sesión') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @else
        @if (Route::has('login'))
        <div class="pt-4 pb-1 border-t border-gray-200">
            <x-responsive-nav-link href="{{ route('login') }}">
                {{ __('Iniciar Sesión') }}
            </x-responsive-nav-link>
            @if (Route::has('register'))
            <x-responsive-nav-link href="{{ route('register') }}">
                {{ __('Registrarse') }}
            </x-responsive-nav-link>
            @endif
        </div>
        @endif
        @endauth
    </div>
</nav>