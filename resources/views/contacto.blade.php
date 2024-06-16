<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-cyan-200 to-blue-800 flex justify-center items-center">

        <x-propios.principal>

            <div class="flex w-full justify-center items-center">
                <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 bg-gradient-to-r from-cyan-700 to-blue-900 w-full max-w-4xl p-8 sm:p-12 rounded-xl shadow-lg shadow text-white overflow-hidden">
                    <div class="flex flex-col space-y-8 justify-between">
                        <div>
                            <h1 class="font-bold text-4xl tracking-wide">¡Hablemos!</h1>
                            <p class="pt-2 mt-4 text-indigo-100 text-sm">¿Tienes alguna pregunta sobre mis servicios de
                                entrenamiento personalizado? ¡Me encantaría ayudarte! Ponte en contacto conmigo a través de
                                correo electrónico o redes sociales.</p>
                        </div>
                        <div class="flex flex-col space-y-6">
                            <div class="inline-flex space-x-2 items-center w-60">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#8CFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                    <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                                </svg>
                                <span>+653 41 25 31</span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#8CFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span>entrenadorPersonal@gmail.com</span>
                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#8CFBFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>33, José Morales Abad, Almería</span>
                            </div>
                        </div>

                        {{-- Redes sociales --}}
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/alba.sedenoriado" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/alba.seri/?igsh=MWpiNmd4MnR6OGJjYw%3D%3D" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>

                            <a href="http://www.linkedin.com/in/alba-sedeño-168895114" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute z-0 w-40 h-40 bg-teal-400 rounded-full -right-28 -top-28"></div>
                        <div class="absolute z-0 w-40 h-40 bg-indigo-400 rounded-full -left-28 -bottom-16"></div>
                        <div class="relative z-10 bg-white rounded-xl shadow-lg p-8 text-gray-600 md:w-80">
                            <form method="POST" action="{{ route('correo.enviar') }}" class="flex flex-col space-y-4">
                                @csrf
                                <div>
                                    <label for="nombre" class="font-bold text-black">Nombre:</label>
                                    <input type='text' name='nombre' placeholder='Nombre' value="{{ old('nombre') }}" class=" border-none ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none ">
                                    @error('nombre')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="my-5">
                                    <label for="email" class="font-bold text-black">Email:</label>
                                    <input type='email' name='correo' placeholder='Email' id="email" value="{{ old('email') }}" class="border-none ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none ">
                                    @error('correo')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="mensaje" class="text-black font-bold">Mensaje:</label>
                                    <textarea name='mensaje' placeholder='¡Hola! Quiero obtener más información sobre el Plan Premium y tus rutinas de entrenamiento' id="contenido" rows="4" class="border-none ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none"></textarea>
                                </div>
                                <button type='submit' class="mt-5 inline-block self-end bg-indigo-600 font-bold rounded-lg px-6 py-4 uppercase text-sm text-white">Enviar
                                    Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </x-propios.principal>
    </div>
</x-app-layout>