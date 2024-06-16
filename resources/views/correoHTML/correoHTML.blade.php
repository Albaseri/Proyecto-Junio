<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de un usuario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
            border-radius: 12px;
            border: 1px solid #d1d5db;
        }

        .titulo {
            background: linear-gradient(90deg, #2a308f, #6dbefb);
            text-align: center;
            padding: 12px 0;
            margin-bottom: 20px;
            color: white;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .mensaje {
            padding: 20px;
            border-radius: 12px;
            background-color: #f0f5ff;
        }

        .mensaje p {
            margin-bottom: 10px;
            color: #333333;
        }

        .mensaje strong {
            font-weight: bold;
            margin-right: 5px;
            color: #555555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="titulo">Nuevo mensaje de un usuario</h1>
        <div class="mensaje">
            <p><strong>Nombre:</strong> {{ $nombre }}</p>
            <p><strong>Email:</strong> {{ $correo }}</p>
            <p><strong>Mensaje:</strong></p>
            <p>{{ $mensaje }}</p>
        </div>
    </div>
</body>

</html>