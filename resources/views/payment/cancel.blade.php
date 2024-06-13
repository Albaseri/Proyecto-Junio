<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Cancelado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .background-gradient {
            background: linear-gradient(135deg, #1e3a8a 25%, #4fc3f7 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Inter', sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            text-align: center;
        }

        .container h2 {
            color: #e53e3e;
        }

        .container p {
            margin-top: 15px;
            color: #4a5568;
        }

        .button {
            margin-top: 20px;
            background-color: #e53e3e;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .button:hover {
            background-color: #c53030;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .icon {
            width: 50px;
            height: 50px;
            fill: #e53e3e;
        }
    </style>
</head>

<body>
    <div class="background-gradient">
        <div class="container">
            <div class="icon-container">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6h2V7zm0 8h-2v2h2v-2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold mb-6">Pago Cancelado</h2>
            <p>El pago ha sido cancelado. Inténtelo nuevamente.</p>
            <a href="/" class="button">Volver al inicio</a>
        </div>
    </div>
</body>

</html>
