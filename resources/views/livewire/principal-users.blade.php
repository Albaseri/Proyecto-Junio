<div>
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
            </div>
            @if (count($users))
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-white">
                    <thead
                        class=" text-white text-md uppercase bg-violet-950 border-b border-purple-400 dark:text-white">
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
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        @foreach ($users as $user)
                            <tr
                                class="bg-white border-b dark:bg-white dark:border-violet-700 hover:bg-gray-50 dark:hover:bg-violet-200">

                                <td class="px-6 py-4">
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
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                        user</a>
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
        <div class="mt-2">
            {{ $users->links() }}
        </div>
    </x-propios.principal>
</div>
