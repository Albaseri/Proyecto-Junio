<x-propios.principal>
    <h1 class="text-black font-bold text-center text-2xl  my-4">Gestionar Categorías</h1>

    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4">
        <label for="table-search" class="sr-only">Buscar</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-violet-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search-users" wire:model.live="buscar"
                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-300  dark:placeholder-gray-700 dark:text-cyan-700 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar categorías">
        </div>

        <a href="{{ route('categories.create') }}"
            class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-cyan-600 transition duration-300 ease-out border-2 border-cyan-500 rounded-full shadow-md group">
            <span
                class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-cyan-600 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
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
        <table
            class="w-full text-sm text-left rtl:text-right text-black-100 dark:text-white-100 border-cyan-500 border-b">
            <thead class="text-md text-white uppercase bg-cyan-700 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        NOMBRE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DESCRIPCIÓN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="border-cyan-500 border-b">
                @foreach ($categorias as $item)
                    <tr class="bg-white border-b hover:bg-cyan-50">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white-100">
                            {{ $item->nombre }}
                        </th>

                        <td class="px-6 py-4">
                            {{ $item->descripcion }}
                        </td>
                        <td class="px-6 py-4 text-center ">
                            <form action="{{ route('categories.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('categories.edit', $item->id) }}">
                                    <i class="fas fa-pencil text-pink-500 hover:text-xl mr-2"></i>
                                </a>
                                <button>
                                    <i class="fas fa-trash text-teal-400 hover:text-2xl mr-2"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</x-propios.principal>
