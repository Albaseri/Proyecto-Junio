<x-propios.principal>
    <h1 class="text-white font-bold text-center text-lg  mb-5">GESTIONAR CARDS DE ENTRENAMIENTO</h1>

    <div class="flex w-full mb-2 items-center justify-between">
        <div class="flex-1 w-3/4">
            <input
                class="border-gray-300  bg-slate-800 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-60 mr-1"
                type="search" placeholder="Buscar por título o estado..." wire:model.live="buscar">
            <i class="fas fa-search text-white  text-lg"></i>
        </div>

        <a href="{{ route('trainingCards.create') }}"
            class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
            <span
                class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-violet-900 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </span>
            <span
                class="absolute flex items-center justify-center w-full h-full bg-white text-violet-900 transition-all duration-300 transform group-hover:translate-x-full ease"><i
                    class="fas fa-add mr-2"></i>Nueva</span>
            <span class="relative invisible">Button Text</span>
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if (count($trainingCards))

            <table class="w-full text-sm text-left rtl:text-right text-black-100 dark:text-white-100">
                <thead
                    class="text-md align-content-center text-center text-white uppercase bg-violet-500 border-b border-purple-400 dark:text-white">
                    <tr>

                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">IMAGEN</span>
                        </th>
                        <th scope="col" class="px-4 py-3">
                            TÍTULO
                        </th>
                        <th scope="col" class="px-4 py-3">
                            DESCRIPCIÓN
                        </th>
                        <th scope="col" class="px-4 py-3">
                            NÚMERO REPETICIONES
                        </th>
                        <th scope="col" class="px-4 py-3">
                            NÚMERO SERIES
                        </th>
                        <th scope="col" class="px-4 py-3">
                            ESTADO
                        </th>
                        <th scope="col" class="px-4 py-3">
                            ENLACE A YOUTUBE
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Acciones
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainingCards as $item)
                        <tr class="bg-white border-b border-purple-400 hover:bg-purple-200">
                            <td class="p-4">
                                <div class="w-32 h-auto max-w-full max-h-full">
                                    <img src="{{ Storage::url($item->imagen) }}"
                                        class="object-cover w-full h-full rounded-lg" alt="">
                                </div>
                            </td>

                            <th scope="row" class="px-2 py-2  text-black whitespace-nowrap dark:text-white-100">
                                {{ $item->titulo }}
                            </th>

                            <td class="px-2 py-2 text-justify">
                                {{ $item->descripcion }}

                            </td>

                            <td class="px-1 text-center">
                                {{ $item->n_repeticiones }}

                            </td>
                            <td class="px-2 text-center">
                                {{ $item->n_series }}

                            </td>
                            <td class="px-2 text-center">
                                <div class="flex items-center">
                                    <div @class([
                                        'h-2.5 w-2.5 rounded-full',
                                        'bg-green-500 me-2' => $item->estado == 'VISIBLE',
                                        'bg-red-500 me-2' => $item->estado == 'NO VISIBLE',
                                    ])></div> {{ $item->estado }}
                                </div>
                            </td>

                            <td class="px-2 text-justify text-blue-500">
                                <a href="{{ $item->url_youtube }}">{{ $item->url_youtube }}</a>

                            </td>
                            <td class="px-1 py-1">
                                <button wire:click="edit(102)">
                                    <i class="fas fa-edit text-yellow-500 hover:text-xl mr-2"></i>
                                </button>
                                <button wire:click="confirmarDelete({{ $item->id }})">
                                    <i class="fas fa-trash text-pink-500 hover:text-xl"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
    </div>
    {{-- Párrafo cuando no existe usuari-no se encuentra --}}
@else
    <p class="text-red-500"><i class="fas solid fa-triangle-exclamation mr-2"></i>
        No se encontró ningún usuario o no ha sido creado aún</p>
    @endif

    <div class="py-12">
        {{ $trainingCards->links() }}
    </div>
</x-propios.principal>
