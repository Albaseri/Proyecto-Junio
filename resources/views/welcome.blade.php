<x-app-layout>

    <main class="py-12 bg-gradient-to-t from-blue-900  to-blue-400">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <section class="overflow-hidden sm:rounded-lg">
                <div class="bg-opacity-10 bg-black">
                    <div class="p-6 lg:p-8 text-left">
                        <h1 class="mt-8 text-7xl text-white font-semibold text-white-800 " data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine">
                            Construye una forma corporal perfecta para una vida buena y saludable
                        </h1>
                        <p class="mt-6 text-cyan-100 text-2xl leading-relaxed">
                            ¡Empieza tu viaje hacia una vida más saludable! Aquí encontrarás todo lo que necesitas para
                            alcanzar tus metas de fitness de manera divertida y efectiva
                        </p>
                    </div>

                    {{-- Sección descarga PDF --}}
                    <section class="bg-opacity-40 bg-black relative isolate overflow-hidden py-10 sm:py-24 lg:py-10">
                        <div class="container mx-auto px-6 lg:px-8">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                                <div>
                                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                                        ¡Descarga estos tips gratuitos ya!
                                    </h2>
                                    <p class="mt-5 text-lg leading-8 text-cyan-100">
                                        Obtén acceso instantáneo a mi PDF gratuito con una serie de consejos saludables para mejorar tu bienestar y calidad de vida.
                                    </p>
                                    <div class="mt-6">
                                        <a href="{{ Storage::url('pdfs/GuíaSaludableCONenlaces.pdf') }}"
                                            target="_blank"
                                            class="inline-block rounded-full bg-blue-400 px-5 py-3 text-md font-semibold text-white hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
                                            ¡Lo quiero ya!
                                        </a>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="absolute top-0 left-0 right-0 bottom-0 "></div>
                                    <img src="/storage/consejos.jpg" data-aos="fade-up-left"
                                        class="img-tips ml-20 rounded-lg shadow-lg z-10 w-80 h-auto" alt="Imagen Tips">
                                </div>
                            </div>
                        </div>
                    </section>
                    

                    {{-- Sección explicación de entretenimiento/asesoramiento --}}
                    <h1 class="text-5xl mt-5 p-5 text-white font-bold">Transforma tu <span
                            class="text-cyan-200 text-4xl font-bold">estilo de vida</span>, no sólo tu cuerpo</h1>

                    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 " data-aos="flip-up">
                        <article class="p-6 rounded-lg shadow-md bg-white bg-opacity-20">
                            <div class="flex items-center text-white">
                                <h2 class="text-2xl font-semibold"><span class="text-4xl">🏋🏼‍♀️</span>Ejercicios
                                    Personalizados</h2>
                            </div>
                            <p class="mt-4 text-white leading-relaxed">
                                ¡Descubre una variedad de ejercicios diseñados específicamente para ti y tus objetivos
                                de fitness! Desde ejercicios cardiovasculares hasta entrenamientos de fuerza, tenemos
                                todo lo que necesitas para mantenerte en forma y saludable.
                            </p>
                        </article>

                        <article class="p-6 rounded-lg shadow-md bg-white bg-opacity-50">
                            <div class="flex items-center text-white">
                                <h2 class="text-2xl font-semibold"><span class="text-4xl">📝</span>Blog
                                </h2>
                            </div>
                            <p class="mt-4 text-white leading-relaxed">
                                ¡Descubre recetas saludables, artículos, consejos y experiencias para
                                complementar tu rutina de ejercicios, aumentar tu motivación y ayudarte a alcanzar tus
                                objetivos de fitness más
                                rápido!
                            </p>
                        </article>

                        <article class="p-6 rounded-lg shadow-md bg-white bg-opacity-50">
                            <div class="flex items-center text-white">
                                <h2 class="text-2xl font-semibold"><span class="text-4xl">💻</span>Rutinas
                                    Personalizadas</h2>
                            </div>
                            <p class="mt-4 text-white leading-relaxed">
                                ¡Explora nuestras rutinas de entrenamiento cuidadosamente diseñadas para todos los
                                niveles de condición física! Ya seas principiante o avanzado, tenemos una rutina
                                perfecta para ti.
                            </p>
                        </article>

                        <article class="p-6 rounded-lg shadow-md bg-white bg-opacity-40">
                            <div class="flex items-center text-white">
                                <h2 class="text-2xl font-semibold"><span class="text-4xl">🙌🏼</span>Acompañamiento día
                                    a día</h2>
                            </div>
                            <p class="mt-4 text-white leading-relaxed">
                                Esta va a ser la clave para adelantarnos a cualquier estancamiento y desmotivación ya
                                que mantendremos un contacto directo o vía whatsapp para ir supervisando todo el proceso
                                y resolverte cualquier duda lo antes posible.
                            </p>
                        </article>
                    </section>

                    {{-- Sección de PLANES --}}
                    <section class="mx-auto pt-10 pb-36 px-8 bg-gray-800 bg-opacity-40">
                        <div class="max-w-md mx-auto mb-14 text-center">
                            <h1
                                class="text-4xl font-semibold text-white mb-6 lg:text-5xl animate__animated animate__bounceIn">
                                ¡Planes de Entrenamiento!
                            </h1>

                        </div>

                        <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start"
                            data-aos="fade-up-left">
                            {{--  Plan Gratuito --}}
                            <div
                                class="w-full flex-1 mt-8 p-8 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:rounded-r-none">
                                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                                    <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg"
                                        alt="Plan Gratuito" class="rounded-3xl w-20 h-20" />
                                    <div class="ml-5">
                                        <span class="block text-2xl font-semibold text-indigo-600">Gratuito</span>
                                        <span class="text-gray-500 font-medium">Acceso gratuito</span>
                                    </div>
                                </div>
                                <ul class="mb-7 font-medium text-gray-500">
                                    <li class="flex text-lg mb-2">
                                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg"
                                            alt="Check icon" />
                                        <span class="ml-3">Acceso a <span class="text-black">1 día de
                                                entrenamiento</span></span>
                                    </li>
                                </ul>
                                <a href="{{ route('register') }}"
                                    class="flex justify-center items-center bg-blue-800 rounded-full py-5 px-4 text-center text-white text-xl">
                                    Elige Plan
                                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg"
                                        class="ml-2" alt="Arrow icon" />
                                </a>
                            </div>

                            {{--  Plan Premium  --}}
                            <div class="w-full flex-1 p-8 mt-8 shadow-xl rounded-3xl bg-gradient-to-b from-cyan-700 to-blue-500 text-white sm:w-96 lg:w-full lg:mt-0">
                                <div class="mb-8 pb-8 flex items-center border-b border-black">
                                    <div class="mr-4 icono-corona">
                                        <i class="fa-solid fa-crown text-yellow-200 text-6xl"></i> <!-- Ajustado tamaño de la corona -->
                                    </div>
                                    <div class="ml-4">
                                        <span class="block text-3xl font-semibold">Premium</span>
                                        <span class="text-3xl font-bold">19 </span><span class="font-medium text-xl">€</span><span
                                            class="font-medium">/ usuario</span>
                                    </div>
                                </div>
                                <ul class="mb-10 font-medium text-xl">
                                    <li class="flex mb-6">
                                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" alt="Check icon" />
                                        <span class="ml-3">Acceso a <span class="text-white">rutina completa de 3 días</span></span>
                                    </li>
                                    <li class="flex mb-6">
                                        <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" alt="Check icon" />
                                        <span class="ml-3"><span class="text-white">Soporte personalizado</span> del entrenador</span>
                                    </li>
                                </ul>
                                @if (auth()->check() && auth()->user()->roles === 'USER')
                                <a href="{{ route('payment.form') }}"
                                    class="flex justify-center items-center bg-white text-indigo-600 rounded-full py-5 px-4 text-center text-xl">
                                    Elige Plan
                                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" alt="Arrow icon" />
                                </a>
                                @else
                                <a href="{{ route('login') }}"
                                    class="flex justify-center items-center font-bold bg-white hover:bg-blue-800 hover:text-white text-indigo-600 rounded-full py-5 px-4 text-center text-xl">
                                    Inicia sesión y elige este plan
                                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" alt="Arrow icon" />
                                </a>
                                @endif
                            </div>
                            

                            {{--  Plan Avanzado  --}}
                            <div class="w-full flex-1 mt-8 p-8 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full">
                                <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                                    <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg"
                                        alt="Plan Avanzado" class="rounded-3xl w-20 h-20" />
                                    <div class="ml-5">
                                        <span class="block text-2xl font-semibold text-indigo-600">Próximamente...</span>
                                        <span class="text-gray-500 font-medium">Nuevas y emocionantes
                                            características</span>
                                    </div>
                                </div>
                                <ul class="mb-7 font-medium text-gray-500">
                                    <li class="flex text-lg mb-2">
                                        <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg"
                                            alt="Check icon" />
                                        <span class="ml-3">Mantente atento a nuestras <span
                                                class="text-black">novedades</span></span>
                                    </li>

                                </ul>
                                <a href="#/"
                                    class="flex justify-center items-center bg-blue-800 rounded-full py-5 px-4 text-center text-white text-xl">
                                    Elige Plan
                                    <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg"
                                        class="ml-2" alt="Arrow icon" />
                                </a>
                            </div>
                        </div>
                    </section>


                </div>

                {{-- Sección Contáctame --}}
                <div class="relative bg-black py-20 px-6 font-[sans-serif]">
                    <div class="absolute inset-0 bg-black"></div>
                    <div class="absolute inset-0 bg-cover bg-center bg-black opacity-50"
                        style="background-image: url(https://img.freepik.com/foto-gratis/hombre-fuerte-entrenando-gimnasio_1303-23478.jpg);">
                    </div>
                    <div class="relative container mx-auto text-center">
                        <h2 class="text-4xl font-extrabold text-white mb-6">¿Todavía te lo estás pensando?</h2>
                        <p class="text-lg text-white mb-8">¡No esperes más!</p>
                        <a href="{{ route('contacto.mostrar') }}"
                            class="bg-white text-blue-500 hover:bg-blue-700 hover:text-white py-3 px-8 rounded-full text-lg font-semibold transition duration-300 hover:shadow-lg animate__bounce">
                            ¡Contáctame!
                        </a>
                    </div>
                </div>

        </div>
        </div>

        {{-- Icono Whatsapp Contacto --}}
        <div class="fixed bottom-8 right-8 ">
            <a href="https://api.whatsapp.com/send/?phone=34653412531&text=¡Hola! Estoy interesado/a en saber más sobre tu plan de entrenamiento ¡Necesito ponerme en forma! Muchas gracias de antemano.🏋🏼‍♀️🙌🏼&type=phone_number&app_absent=0"
                target="_blank"
                class="flex items-center justify-center w-16 h-16 bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 transition duration-300 ease-in-out">
                <i class="fa-brands fa-whatsapp text-4xl"></i>
            </a>
        </div>

        </div>

        {{-- Footer --}}
        <footer class=" bg-gradient-to-b from-blue-950  to-blue-800 text-white py-12 px-4 font-sans tracking-wide">
            <div class="text-center">
                <h6 class="text-base">Mantente en contacto conmigo:</h6>

                <ul class="flex flex-wrap justify-center gap-x-8 gap-4 my-8">
                    <li><a href="https://www.facebook.com/alba.sedenoriado" target="_blank" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-9 h-9" viewBox="0 0 512 512">
                                <path fill="#1877f2"
                                    d="M512 256c0 127.78-93.62 233.69-216 252.89V330h59.65L367 256h-71v-48.02c0-20.25 9.92-39.98 41.72-39.98H370v-63s-29.3-5-57.31-5c-58.47 0-96.69 35.44-96.69 99.6V256h-65v74h65v178.89C93.62 489.69 0 383.78 0 256 0 114.62 114.62 0 256 0s256 114.62 256 256z"
                                    data-original="#1877f2" />
                                <path fill="#fff"
                                    d="M355.65 330 367 256h-71v-48.021c0-20.245 9.918-39.979 41.719-39.979H370v-63s-29.296-5-57.305-5C254.219 100 216 135.44 216 199.6V256h-65v74h65v178.889c13.034 2.045 26.392 3.111 40 3.111s26.966-1.066 40-3.111V330z"
                                    data-original="#ffffff" />
                            </svg>
                        </a></li>

                    <li><a href="www.linkedin.com/in/alba-sedeño-168895114" target="_blank" class="text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-9 h-9" viewBox="0 0 176 176">
                                <g data-name="Layer 2">
                                    <rect width="176" height="176" fill="#0077b5" data-original="#0077b5"
                                        rx="24" />
                                    <path fill="#fff"
                                        d="M63.4 48a15 15 0 1 1-15-15 15 15 0 0 1 15 15zM60 73v66.27a3.71 3.71 0 0 1-3.71 3.73H40.48a3.71 3.71 0 0 1-3.72-3.72V73a3.72 3.72 0 0 1 3.72-3.72h15.81A3.72 3.72 0 0 1 60 73zm82.64 34.5v32.08a3.41 3.41 0 0 1-3.42 3.42h-17a3.41 3.41 0 0 1-3.42-3.42v-31.09c0-4.64 1.36-20.32-12.13-20.32-10.45 0-12.58 10.73-13 15.55v35.86A3.42 3.42 0 0 1 90.3 143H73.88a3.41 3.41 0 0 1-3.41-3.42V72.71a3.41 3.41 0 0 1 3.41-3.42H90.3a3.42 3.42 0 0 1 3.42 3.42v5.78c3.88-5.82 9.63-10.31 21.9-10.31 27.18 0 27.02 25.38 27.02 39.32z"
                                        data-original="#ffffff" />
                                </g>
                            </svg>
                        </a></li>

                    <li><a href="https://www.instagram.com/alba.seri/?igsh=MWpiNmd4MnR6OGJjYw%3D%3D" target="_blank"
                            class="text-xl hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline w-9 h-9" viewBox="0 0 24 24">
                                <linearGradient id="a" x1="-37.106" x2="-26.555" y1="-72.705"
                                    y2="-84.047" gradientTransform="matrix(0 -1.982 -1.844 0 -132.522 -51.077)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5" />
                                    <stop offset=".5" stop-color="#ff543e" />
                                    <stop offset="1" stop-color="#c837ab" />
                                </linearGradient>
                                <path fill="url(#a)"
                                    d="M1.5 1.633C-.386 3.592 0 5.673 0 11.995c0 5.25-.916 10.513 3.878 11.752 1.497.385 14.761.385 16.256-.002 1.996-.515 3.62-2.134 3.842-4.957.031-.394.031-13.185-.001-13.587-.236-3.007-2.087-4.74-4.526-5.091C18.89.029 18.778.005 15.91 0 5.737.005 3.507-.448 1.5 1.633z"
                                    data-original="url(#a)" />
                                <path fill="#fff"
                                    d="M11.998 3.139c-3.631 0-7.079-.323-8.396 3.057-.544 1.396-.465 3.209-.465 5.805 0 2.278-.073 4.419.465 5.804 1.314 3.382 4.79 3.058 8.394 3.058 3.477 0 7.062.362 8.395-3.058.545-1.41.465-3.196.465-5.804 0-3.462.191-5.697-1.488-7.375-1.7-1.7-3.999-1.487-7.374-1.487zm-.794 1.597c7.574-.012 8.538-.854 8.006 10.843-.189 4.137-3.339 3.683-7.211 3.683-7.06 0-7.263-.202-7.263-7.265 0-7.145.56-7.257 6.468-7.263zm5.524 1.471a1.063 1.063 0 1 0 0 2.126 1.063 1.063 0 0 0 0-2.126zm-4.73 1.243a4.55 4.55 0 1 0 .001 9.101 4.55 4.55 0 0 0-.001-9.101zm0 1.597c3.905 0 3.91 5.908 0 5.908-3.904 0-3.91-5.908 0-5.908z"
                                    data-original="#ffffff" />
                            </svg></a></li>

                </ul>


                <p xmlns:cc="http://creativecommons.org/ns#" class="text-sm flex justify-center items-center">
                    Activa Fitness está bajo la licencia
                    <a href="https://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank"
                        rel="noopener noreferrer" class="inline-block hover:underline ml-1 flex items-center">
                        <span class="sr-only">CC BY-NC-ND 4.0</span>
                        <img class="h-5 mx-1"
                            src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"
                            alt="CC icon">
                        <img class="h-5 mx-1"
                            src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"
                            alt="BY icon">
                        <img class="h-5 mx-1"
                            src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"
                            alt="NC icon">
                        <img class="h-5 mx-1"
                            src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"
                            alt="ND icon">
                    </a>
                </p>

            </div>
        </footer>
        </section>
        </div>
    </main>
</x-app-layout>
