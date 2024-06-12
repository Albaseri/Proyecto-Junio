<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .background-gradient {
            background: linear-gradient(135deg, #1e3a8a 25%, #4fc3f7 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
        }

        .formas-de-fondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .formas-de-fondo div {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: flotar 10s infinite;
        }

        .formas-de-fondo div:nth-child(1) {
            width: 300px;
            height: 300px;
            top: 10%;
            left: 15%;
            animation-delay: 0s;
        }

        .formas-de-fondo div:nth-child(2) {
            width: 400px;
            height: 400px;
            top: 60%;
            left: 70%;
            animation-delay: 2s;
        }

        .formas-de-fondo div:nth-child(3) {
            width: 200px;
            height: 200px;
            top: 40%;
            left: 50%;
            animation-delay: 4s;
        }

        @keyframes flotar {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .contenedor {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body>
    <div class="background-gradient">
        <div class="formas-de-fondo">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="contenedor mx-auto p-4 flex justify-center items-center h-screen" data-aos="fade-up">
        <div class="p-8 rounded-lg shadow-lg max-w-md w-full bg-white">
            <h2 class="text-2xl font-bold text-center mb-6 text-cyan-600">Formulario de Pago</h2>
            <form action="{{ route('checkout.session') }}" method="POST" class="space-y-4">
                @csrf

                <button type="submit" class="w-full py-3 bg-cyan-500 hover:bg-cyan-700 text-cyan-600 rounded-lg text-lg transition duration-300">
                    Realizar pago 19€
                </button>
            </form>
        </div>
    </div>
  
</body>

</html>