<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <title>403 Forbidden</title>
    <style>
        @keyframes floating {
            from {
                transform: translateY(0px);
            }

            65% {
                transform: translateY(15px);
            }

            to {
                transform: translateY(-0px);
            }
        }

        html, body {
            height: 100%;
            margin: 0;
            background-image: url('https://assets.codepen.io/1538474/star.svg'), linear-gradient(to bottom, #05007A, #4D007D);
            background-attachment: fixed;
            overflow: hidden;
            font-family: 'Nunito', sans-serif;
        }

        .mars {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 27vmin;
            background: url('https://assets.codepen.io/1538474/mars.svg') no-repeat bottom center;
            background-size: cover;
        }

        .logo-404 {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 16vmin;
            width: 30vmin;
        }

        .meteor {
            position: absolute;
            right: 2vmin;
            top: 16vmin;
        }

        .title {
            color: white;
            font-weight: 600;
            text-align: center;
            font-size: 5vmin;
            margin-top: 31vmin;
        }

        .subtitle {
            color: white;
            font-weight: 400;
            text-align: center;
            font-size: 3.5vmin;
            margin-top: -1vmin;
            margin-bottom: 9vmin;
        }

        .btn-back {
            border: 1px solid white;
            color: white;
            height: 5vmin;
            padding: 12px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }

        .btn-back:hover {
            background: white;
            color: #4D007D;
        }

        .astronaut {
            position: absolute;
            top: 18vmin;
            left: 10vmin;
            height: 30vmin;
            animation: floating 3s infinite ease-in-out;
        }

        .spaceship {
            position: absolute;
            bottom: 15vmin;
            right: 24vmin;
        }

        @media (max-width: 480px) and (min-width: 320px) {
            .logo-404 {
                top: 45vmin;
            }
            .title {
                margin-top: 65vmin;
            }
            .btn-back {
                font-size: 3.5vmin;
            }
            .astronaut {
                top: 2vmin;
            }
            .spaceship {
                width: 45vmin;
                bottom: 18vmin;
            }
        }
    </style>
</head>
<body>
    <div class="mars"></div>
    <img src="https://assets.codepen.io/1538474/404.svg" class="logo-404" alt="404 logo" />
    <img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" alt="meteor" />
    <p class="title">Oh no!!</p>
    <p class="subtitle">
        Está escribiendo una URL incorrecta <br /> o solicitando una página que ya no existe
    </p>
    <div align="center">
        <a class="btn-back" href="{{route('welcome')}}">Volver a la página principal</a>
    </div>
    <img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" alt="astronaut" />
    <img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" alt="spaceship" />
</body>
</html>
