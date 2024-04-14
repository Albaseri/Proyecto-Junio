<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hola soy dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 bg-gradient-to-br from-blue-800 to-pink-600">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
