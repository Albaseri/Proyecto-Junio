    <x-propios.principal>
        <h1 class="text-black font-bold text-center text-2xl my-4">Gestionar Posts del Blog</h1>

        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4">
            <label for="table-search" class="sr-only">Buscar</label>
            <div class="relative">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users" wire:model.live="buscar"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar por título, contenido...">
            </div>

            <a href="{{ route('posts.create') }}"
                class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-cyan-600 transition duration-300 ease-out border-2 border-cyan-500 rounded-full shadow-md group">
                <span
                    class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-cyan-600 group-hover:translate-x-0 ease">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>
                </span>
                <span
                    class="absolute flex items-center justify-center w-full h-full bg-white text-cyan-700 transition-all duration-300 transform group-hover:translate-x-full ease"><i
                        class="fas fa-add mr-2"></i>Nuevo</span>
                <span class="relative invisible">Button Text</span>
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if (count($posts))

            <table
                class="w-full text-sm text-left rtl:text-right text-black-100 dark:text-white-100 border-cyan-500 border-b">
                <thead class="text-md text-white uppercase bg-cyan-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-16 py-3">
                            <span class="sr-only">IMAGEN</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            TÍTULO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CONTENIDO
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CATEGORÍA
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>

                    </tr>
                </thead>
                <tbody class="border-cyan-500 border-b">
                    @foreach ($posts as $item)
                    <tr class="bg-white border-b hover:bg-cyan-50">
                        <td class="p-4">
                                <img src="{{ Storage::url($item->imagen) }}"
                                    class=" rounded-lg w-16 md:w-32 max-w-full max-h-full" alt="">
                            </td>
                            <th scope="row"
                                class="text-center px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white-100">
                                {{ $item->titulo }}
                            </th>

                            <td class="px-6 py-4 text-justify">
                                {{ $item->contenido }}

                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->category->nombre }} {{-- Accede al nombre de la categoría a través de la relación --}}
                            </td>
                            <td class="px-6 py-4 text-center ">

                                <a href="{{ route('posts.edit', $item->id) }}">
                                    <i class="fas fa-pencil text-pink-500 hover:text-xl mr-2"></i>
                                </a>

                                <button wire:click="confirmarDelete({{ $item->id }})">
                                    <i class="fas fa-trash text-teal-400 hover:text-xl"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="py-12">
            {{ $posts->links() }}
        </div>
        @else
        <p class="text-red-500"><i class="fas solid fa-triangle-exclamation mr-2"></i>
            No se encontró ningún post o no ha sido creado aún</p>
        @endif
    
    </x-propios.principal>
