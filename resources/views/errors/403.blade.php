<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403: Prohibido</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <style>
        html {
            background: #c32250;
            background: linear-gradient(90deg, #228bc3 0%, #141571 100%);
            font-size: 20px;
        }

        :root {
            --distancia-agujero: 25px;
        }

        #agujero1 {
            top: var(--distancia-agujero);
            left: var(--distancia-agujero);
        }

        #agujero2 {
            top: var(--distancia-agujero);
            right: var(--distancia-agujero);
        }

        #agujero3 {
            bottom: var(--distancia-agujero);
            left: var(--distancia-agujero);
        }

        #agujero4 {
            bottom: var(--distancia-agujero);
            right: var(--distancia-agujero);
        }

        .agujero {
            width: 20px;
            height: 20px;
            position: absolute;
            border-radius: 50%;
            background-image: radial-gradient(circle at 99%, #fff 10%, rgb(150, 150, 150) 70%);
            transform: rotate(45deg);
        }

        #contenedor-firma {
            background-color: #fff;
            position: relative;
            width: 80%;
            min-width: 340px;
            max-width: 800px;
            height: 70%;
            margin: 2% auto;
            padding: 50px;
            border: 1px solid #ddd;
            border-radius: 45px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            font-family: "Montserrat", sans-serif;
            font-size: 1rem;
        }

        #encabezado {
            background: linear-gradient(90deg, #228bc3 25%, #141571 100%);
            padding: 20px;
            border-radius: 30px 30px 0 0;
            text-align: center;
        }

        h1,
        h3 {
            text-transform: uppercase;
            color: #fff;
            font-size: 5.5em;
            line-height: .9em;
            letter-spacing: 3px;
            margin: 0;
            font-weight: 900;
        }

        h3 {
            font-size: 3em;
            line-height: .9em;
            letter-spacing: 3px;
        }

        .rayo {
            position: absolute;
            width: 25%;
            height: 10px;
            background-color: #fff;
        }

        #rayo1 {
            top: 115px;
            left: 80px;
        }

        #rayo2 {
            top: 115px;
            right: 80px;
        }

        #cuerpo-firma {
            display: flex;
            flex-wrap: nowrap;
        }

        #contenedor-copia {
            flex-basis: 60%;
        }

        #contenedor-circulo {
            flex-basis: 40%;
        }

        h2,
        p {
            text-align: center;
            color: rgb(50, 50, 50);
        }

        h2 {
            font-size: 3em;
            text-transform: uppercase;
            margin: 40px 0;
            line-height: .9em;
        }

        p {
            font-size: 20px;
        }

        @media screen and (max-width: 930px) {
            #contenedor-firma {
                font-size: .75rem;
            }

            h1,
            h3 {
                font-size: 3em;
            }
        }

        @media screen and (max-width: 750px) {
            #contenedor-firma {
                font-size: .6rem;
            }

            h1,
            h3 {
                font-size: 2.5em;
            }

            h2 {
                margin: 25px 0;
            }

            .rayo {
                visibility: hidden;
            }
        }

        @media screen and (max-width: 600px) {
            #contenedor-firma {
                font-size: .4rem;
                padding: 15px;
                border-radius: 25px;
            }

            #encabezado {
                border-radius: 20px 20px 0 0;
            }

            #contenedor-circulo {
                width: 50%;
            }

            .agujero {
                width: 10px;
                height: 10px;
            }

            :root {
                --distancia-agujero: 8px;
            }
        }

        @media screen and (max-width: 450px) {
            #contenedor-firma {
                font-size: .34rem;
            }

            h2 {
                margin: 10px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div id="contenedor-firma">
        <div id="agujero1" class="agujero"></div>
        <div id="agujero2" class="agujero"></div>
        <div id="agujero3" class="agujero"></div>
        <div id="agujero4" class="agujero"></div>
        <header id="encabezado">
            <h1>403</h1>
            <h3>Solo Personal Autorizado</h3>
            <div id="rayo1" class="rayo"></div>
            <div id="rayo2" class="rayo"></div>
        </header>
        <section id="cuerpo-firma">
            <div id="contenedor-copia">
                <h2>Prohibido</h2>
                <p><strong>Error 403: Forbidden</strong>. No tienes permiso para ingresar a esta página.</p>
            </div>
            <div id="contenedor-circulo">
                <svg version="1.1" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                    <defs>
                        <pattern id="imagen" patternUnits="userSpaceOnUse" height="450" width="450">
                            <image x="25" y="25" height="450" width="450"
                                xlink:href="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png">
                            </image>
                        </pattern>
                    </defs>
                    <circle cx="250" cy="250" r="200" stroke-width="40px" stroke="#c32250"
                        fill="url(#imagen)" />
                    <line x1="100" y1="100" x2="400" y2="400" stroke-width="40px"
                        stroke="#c32250" />
                </svg>
            </div>
        </section>
    </div>
</body>

</html>
