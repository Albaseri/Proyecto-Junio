<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Activa Fitness </title>
    <link rel="shortcut icon" href="{{ Storage::url('logo.png') }}" type="image/x-icon">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div>
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="w-full">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')
    @livewireScripts

    @if (session('mensaje'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "{{ session('mensaje') }}",
                    showConfirmButton: false,
                    timer: 2000,
                    customClass: {
                        popup: 'bg-white rounded-lg shadow-md', //Estilo del contenedor principal
                        title: 'text-lg font-medium text-gray-800', // Título del cuadro de diálogo
                        icon: 'text-green-500', // Icono de éxito
                        content: 'text-base text-gray-600',
                    },
                    background: '#f3f4f6', // Color de fondo
                    padding: '2rem', // Espacio entre el texto y el contenido
                    timerProgressBar: true, // Barra de progreso
                });
            });
        </script>
    @endif

</body>

</html>
