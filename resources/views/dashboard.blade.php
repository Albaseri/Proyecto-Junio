<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hola soy dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- ! Color de fondo del home --}}
    <div class="py-12 bg-gradient-to-br  from-cyan-600 to-black ">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="bg-opacity-10 bg-black">
                    <div class="p-6 lg:p-8 text-left">
                        {{-- <x-application-logo class="block h-12 w-auto mx-auto" /> --}}

                        <h1 class="mt-8  text-7xl text-white font-semibold  text-white-800 ">
                            Construya una forma corporal perfecta para una vida buena y saludable
                        </h1>

                        <p class="mt-6 text-cyan-100 text-2xl  leading-relaxed">
                            ¡Empieza tu viaje hacia una vida más saludable! Aquí encontrarás todo lo que necesitas para
                            alcanzar tus metas
                            de fitness de manera divertida y efectiva
                        </p>
                    </div>

                    <div class="bg-white bg-opacity-70 relative isolate overflow-hidden py-16 sm:py-24 lg:py-32">
                        <div class="container mx-auto px-6 lg:px-8">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                                <div>
                                    <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">¡Descarga estos
                                        tips gratuitos ya!
                                    </h2>
                                    <p class="mt-5 text-lg leading-8 text-cyan-700">Obtén acceso instantáneo a nuestro
                                        PDF gratuito con una
                                        serie de consejos saludables para mejorar tu bienestar y calidad de vida.</p>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="inline-block rounded-md bg-indigo-500 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">¡Lo
                                            quiero ya!

                                        </a>
                                    </div>
                                </div>
                                <img src="/storage/fotoprueba.jpeg" class="w-full h-auto" alt="">

                            </div>
                        </div>
                    </div>


                    <h1 class="text-5xl mt-5 p-5 text-white font-bold ">Transforma tu <span
                            class="text-cyan-200 text-4xl font-bold">estilo de vida</span>, no sólo tu cuerpo</h1>

                    <div class="  grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                        <div class="p-6 rounded-lg shadow-md bg-slate-600">
                            <div class="flex items-center text-white">
                                <h2 class="text-2xl font-semibold">🏋🏼‍♀️Ejercicios Personalizados</h2>
                            </div>

                            <p class="mt-4 text-white leading-relaxed">
                                ¡Descubre una variedad de ejercicios diseñados específicamente para ti y tus objetivos
                                de fitness! Desde
                                ejercicios cardiovasculares hasta entrenamientos de fuerza, tenemos todo lo que
                                necesitas para mantenerte en
                                forma y saludable.
                            </p>

                        </div>

                        <div class="p-6 rounded-lg shadow-md bg-slate-500">
                            <div class="flex items-center text-white">

                                <h2 class="text-2xl font-semibold">🥑Plan de Nutrición</h2>
                            </div>

                            <p class="mt-4 text-white leading-relaxed">
                                ¡Descubre recetas saludables, consejos de nutrición y planes de comidas diseñados para
                                complementar tu
                                rutina de ejercicios y ayudarte a alcanzar tus objetivos de fitness más rápido!
                            </p>

                        </div>

                        <div class="p-6 rounded-lg shadow-md bg-slate-400">
                            <div class="flex items-center text-white">

                                <h2 class="text-2xl font-semibold">💻Rutinas Personalizadas</h2>
                            </div>

                            <p class="mt-4 text-white leading-relaxed">
                                ¡Explora nuestras rutinas de entrenamiento cuidadosamente diseñadas para todos los
                                niveles de condición
                                física! Ya seas principiante o avanzado, tenemos una rutina perfecta para ti.
                            </p>

                        </div>

                        <div class="p-6 rounded-lg shadow-md bg-slate-700">
                            <div class="flex items-center text-white">

                                <h2 class="text-2xl font-semibold">🙌🏼Acompañamiento día a día</h2>
                            </div>

                            <p class="mt-4 text-white leading-relaxed">
                                Esta va a ser la clave para adelantarnos a cualquier estancamiento y desmotivación ya
                                que mantendremos un contacto directo o vía whatsapp para ir supervisando todo el proceso
                                y resolverte cualquier duda lo antes posible.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
                <div
                    class="relative h-[400px] overflow-hidden rounded-lg bg-[url('https://tecdn.b-cdn.net/img/new/slides/041.webp')] bg-cover bg-no-repeat p-12 text-center text-white">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
                        <div class="flex h-full items-center justify-center">
                            <div class="text-white">
                                <h2 class="mb-4 text-4xl font-semibold">¿Todavía te lo estás pensando?</h2>
                                <h4 class="mb-6 text-xl font-semibold">¡No esperes más!</h4>
                                <button type="button"
                                    class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
                                    data-twe-ripple-init data-twe-ripple-color="light">
                                    ¡Contáctame!
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </div>
        </div>
    </div>
    <footer class="bg-white  shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-cyan-900 antialiased">
        <p class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
            &copy; 2024 <a href="https://entrenadorpersonal.com/" class="hover:underline" target="_blank">entrenadorpersonal.com</a>. Todos los derechos reservados.
        </p>
        <div class="flex justify-center items-center space-x-1">
          <a href="#" data-tooltip-target="tooltip-facebook" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                  <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
              </svg>
              <span class="sr-only">Facebook</span>
          </a>
          <div id="tooltip-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
              Like us on Facebook
              <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <a href="#" data-tooltip-target="tooltip-twitter" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
              </svg>
              <span class="sr-only">Twitter</span>
          </a>
          <div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
              Follow us on Twitter
              <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <a href="#" data-tooltip-target="tooltip-github" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
              </svg>
              <span class="sr-only">Github</span>
          </a>
          <div id="tooltip-github" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
              Star us on GitHub
              <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
          <a href="#" data-tooltip-target="tooltip-dribbble" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
              </svg>
              <span class="sr-only">Dribbble</span>
          </a>
          <div id="tooltip-dribbble" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
              Follow us on Dribbble
              <div class="tooltip-arrow" data-popper-arrow></div>
          </div>
      </div>
      </footer>
</x-app-layout>
