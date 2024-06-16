<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('welcome') }}">
                <img src="{{ Storage::url('logo.png') }}" class="object-cover h-30 w-40 mb-auto">
            </a>
        </x-slot>

        <a href="{{ route('welcome') }}" class="text-blue-500 hover:text-blue-700 text-bold flex items-center space-x-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            <span>Volver</span>
        </a>

        <h2 class=" text-center mb-5 mt-6 text-3xl font-bold text-gray-900">
            Crea tu cuenta </h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <x-validation-errors class="mb-4" />

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                            '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Terms of Service') .
                                '</a>',
                            'privacy_policy' =>
                            '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Privacy Policy') .
                                '</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <p class="mb-0 mt-2 pt-1 text-sm ">
                    ¿Tiene una cuenta?
                    <a class="underline text-sm text-indigo-600 hover:text-indigo-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Iniciar sesión') }}
                    </a>

                </p>
            </div>

            <div class="my-5">
                <button type="submit" class="w-full flex justify-center bg-gradient-to-r from-cyan-700 to-blue-700 hover:bg-gradient-to-l hover:from-cyan-700 hover:to-blue-700 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">{{ __('Iniciar sesión') }}</button>
            </div>

        </form>

        {{-- ? GitHub --}}
        <div class="flex items-center justify-center space-x-2">
            <span class="h-px w-16 bg-violet-700"></span>
            <span class="my-4 text-violet-300 font-normal">o continúe con</span>
            <span class="h-px w-16 bg-violet-700"></span>
        </div>

        <div class="mt-2">
            <a href="{{ route('github.redirect') }}" class="inline-flex items-center justify-center gap-2 h-10 w-full rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60">
                <img src="https://www.svgrepo.com/show/512317/github-142.svg" alt="GitHub" class="h-[18px] w-[18px] ">
                GitHub
            </a>

            <a href="{{ route('google.redirect') }}" class="inline-flex my-3 items-center justify-center gap-2 h-10 w-full rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="h-[18px] w-[18px] ">
                Google
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>