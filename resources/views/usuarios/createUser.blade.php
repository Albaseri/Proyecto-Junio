<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center opacity-80">
        <x-propios.principal>
            <div class="w-full max-w-lg p-0 rounded-xl shadow-xl text-black bg-white bg-opacity-30 dark:text-black mt-5">
                <div class="bg-blue-800  w-full p-6 rounded-t-xl">
                    <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">NUEVO USUARIO</h1>
                </div>
                <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="p-8">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-md font-medium text-black dark:text-black">Nombre:
                        </label>
                        <input type="text" id="name" value="{{ @old('name') }}"
                            class="bg-gray-50 border text-black text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Nombre..." name="name">
                        <x-input-error for="name"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-md font-medium text-black dark:text-black">Email: </label>
                        <input type="email" id="email" value="{{ @old('email') }}"
                            class="bg-gray-50 border text-black text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Email..." name="email">
                        <x-input-error for="email"></x-input-error>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-md font-medium text-black dark:text-black">Contraseña:</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border text-black text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500"
                            placeholder="Contraseña..." name="password">
                        <x-input-error for="password"></x-input-error>
                    </div>

                    <div class="mb-4">
                        <label for="roles" class="block mb-2 text-md font-medium textblack dark:text-black">Rol:</label>

                        <select id="roles" name="roles"
                            class="bg-gray-50 border textblack text-sm rounded-lg focus:ring-cyan-500 focus:cyan-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-cyan-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-cyan-500 dark:focus:border-blue-500">
                            <option value="ADMIN">Admin</option>
                            <option value="USER">User</option>
                            <option value="PREMIUM">Premium</option>
                        </select>
                        <x-input-error for="roles"></x-input-error>
                    </div>

                    <div class="flex flex-row-reverse mt-5">
                        <button type="submit"
                            class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-save"></i> CREAR
                        </button>

                        <button type="reset"
                            class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-paintbrush"></i> LIMPIAR
                        </button>

                        <a href="{{ route('usersLiv.index') }}"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                            <i class="fas fa-xmark"></i> CANCELAR</a>
                    </div>
                </form>
            </div>
        </x-propios.principal>
    </div>
</x-app-layout>
