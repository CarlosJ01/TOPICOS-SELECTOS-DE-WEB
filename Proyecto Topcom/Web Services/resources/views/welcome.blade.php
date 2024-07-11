<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>toPCom WS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Web Services TOPCOM 2.0
                </div>

                <div class="links">
                    <a href="/api/web-services/get-articulos">Articulos</a>
                    <a href="/api/web-services/registro-usuarios">Registro</a>
                    <a href="/api/web-services/login">Login</a>
                    <a href="/api/web-services/agregar-carrito">Agregar al carrito</a>
                    <a href="/api/web-services/get-carrito">Carrito compras</a>
                    <a href="/api/web-services/quitar-articulo">Quitar articulo carrito</a>
                    <a href="/api/web-services/cancelar-compra/1">Cancelar compra</a>
                </div>
                <hr>
                <div class="links">
                    <a href="/api/web-services/comprar/1">Comprar</a>
                    <a href="/api/web-services/get-compras/1">Compras</a>
                </div>
            </div>
        </div>
    </body>
</html>
