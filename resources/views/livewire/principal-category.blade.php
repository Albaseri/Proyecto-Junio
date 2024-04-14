
    <x-propios.principal>
        <h1 class="text-white font-bold text-center text-lg  mb-5">GESTIONAR CATEGORÍAS</h1>

        <div class="flex flex-row-reverse mb-2">
            <a href="{{ route('categories.create') }}" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-indigo-600 transition duration-300 ease-out border-2 border-purple-500 rounded-full shadow-md group">
                <span
                class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-violet-900 group-hover:translate-x-0 ease">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </span>
            <span
                class="absolute flex items-center justify-center w-full h-full bg-white text-violet-900 transition-all duration-300 transform group-hover:translate-x-full ease"><i
                    class="fas fa-add mr-2"></i>Nueva</span>
            <span class="relative invisible">Button Text</span>
        </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-black-100 dark:text-white-100">
                <thead class="text-md text-white uppercase bg-violet-500  border-b border-purple-400 dark:text-white">
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
                <tbody>
                    @foreach ($categorias as $item)
                        <tr class="bg-white border-b border-purple-400 hover:bg-purple-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white-100">
                                {{ $item->nombre }}
                            </th>

                            <td class="px-6 py-4">
                                {{ $item->descripcion }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('categories.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button>
                                        <i class="fas fa-trash text-pink-500 hover:text-2xl mr-2"></i>
                                    </button>
                                    <a href="{{ route('categories.edit', $item->id) }}">
                                        <i class="fas fa-edit text-teal-400 hover:text-2xl"></i>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </x-propios.principal>
