    <x-propios.principal>
        <div class="relative overflow-x-auto  sm:rounded-lg">
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
                        placeholder="Buscar usuarios">
                </div>

                <a href="{{ route('users.create') }}"
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

                @if (count($users))
                    <table
                        class="w-full text-sm text-left rtl:text-right text-black-100 dark:text-white-100 border-cyan-500 border-b">
                        <thead class="text-md text-white uppercase bg-cyan-700 dark:text-white">
                            <tr>

                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Rol
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="border-cyan-500 border-b">
                            @foreach ($users as $user)
                                <tr class="bg-white border-b hover:bg-cyan-50">

                                    <td class="px-6 py-4">
                                        @if ($user->roles == 'ADMIN')
                                            <i class="fa-solid fa-user-tie mr-2 text-xl" style="color: #66d1e7;"></i>
                                        @endif
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}

                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div @class([
                                                'h-2.5 w-2.5 rounded-full',
                                                'bg-cyan-200 me-2' => $user->roles == 'ADMIN',
                                                'bg-purple-200 me-2' => $user->roles == 'USER',
                                            ])></div> {{ $user->roles }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('categories.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Edit
                                            user <i class="fas fa-pencil text-pink-500 mr-2"></i>
                                        </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
        {{-- Párrafo cuando no existe usuario-no se encuentra --}}
    @else
        <p class="text-red-500"><i class="fas solid fa-triangle-exclamation mr-2"></i>
            No se encontró ningún usuario o no ha sido creado aún</p>
        @endif
        <div class="mt-2">
            {{ $users->links() }}
        </div>
    </x-propios.principal>
