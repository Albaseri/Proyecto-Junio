<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <div class="text-center mb-5">
            <h2 class="mt-6 mb-3 text-3xl font-bold text-gray-900">
                ¡Bienvenido/a!
            </h2>
            <p class="mt-2 text-sm text-gray-500">Por favor, inicie sesión en su cuenta</p>
        </div>
        <div class="flex flex-row justify-center items-center space-x-3">


            <a href="{{ route('github.redirect') }}"
                class="w-11 h-11 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-white hover:shadow-lg cursor-pointer transition ease-in duration-300"><img
                    src="https://www.svgrepo.com/show/512317/github-142.svg" alt="GitHub" class="w-10 h-8 ">

            </a>

            <a href="{{ route('google.redirect') }}"
                class="w-11 h-11 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-white hover:shadow-lg cursor-pointer transition ease-in duration-300"><img
                    s="w-11 h-11 inline-flex my-3 items-center justify-center rounded-2xl  bg-white p-2 text-sm font-medium text-black focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-10 h-8">

            </a>
        </div>
        <div class="flex items-center justify-center space-x-2">
            <span class="h-px w-16 bg-violet-700"></span>
            <span class="my-4 text-violet-300 font-normal">o continúa con</span>
            <span class="h-px w-16 bg-violet-700"></span>
        </div>
        <form method="POST" action="{{ route('login') }}">
            <input type="hidden" name="remember" value="true">

            <div class="relative">


                <label for="email"
                    class="ml-3 text-sm font-bold text-gray-700 tracking-wide">{{ __('Email') }}</label>
                <input id="email"
                    class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-violet-500"
                    type="email" name="email" value="{{ old('email') }}" placeholder="mail@gmail.com" required
                    autofocus autocomplete="username">

            </div>

            <div class="mt-8 content-center">
                <x-label for="password" class="ml-3 text-sm font-bold text-gray-700 tracking-wide"
                    value="{{ __('Password') }}" />
                <input id="password"
                    class="mb-5 w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-violet-500"
                    type="password" name="password" placeholder="Enter your password" required
                    autocomplete="current-password" value="*****|">
            </div>

            <div class="flex items-center justify-between my-5">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">{{ __('Recuérdame') }}</label>
                </div>

                <div class="text-sm ">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-indigo-400 hover:text-blue-500">{{ __('¿Olvidaste su contraseña?') }}</a>
                    @endif
                </div>
            </div>

            <div class="mt-5">
                <button type="submit"
                    class="w-full flex justify-center bg-gradient-to-r from-cyan-700 to-gray-900 hover:bg-gradient-to-l hover:from-cyan-700 hover:to-gray-900 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">{{ __('Iniciar sesión') }}</button>
            </div>

            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                <span>{{ __('¿No tiene una cuenta?') }}</span>
                <a href="#"
                    class=" text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">{{ __('Inscribirse') }}</a>
            </p>

            @csrf

            {{-- <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div> --}}

            {{-- <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button> --}}

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
