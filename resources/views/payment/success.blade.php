<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
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
    <div class="formas-de-fondo">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="contenedor mx-auto p-4 flex justify-center items-center h-screen" data-aos="fade-up">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full text-center">
            <h2 class="text-4xl font-bold mb-6 text-blue-400">Pago Exitoso</h2>
            <p class="text-lg text-indigo-700">¡Disfruta de las ventajas de ser PREMIUM🌟!</p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
