<?php
    $urlWS = 'https://topcom-2-web-services.herokuapp.com';

    if (!isset($_GET["view"])) {
        $view = "/";
    }else{
        $view = $_GET["view"];
    }

    /* Rutas */
    switch ($view) {
        case '/':
        case 'inicio':
            include('php/inicio.php');
            break;
        case 'productos':
            include('php/productos.php');
            break;
        case 'login':
            include('php/login.php');
            break;
        case 'registro':
            include('php/registro.php');
            break;
        case 'carrito':
            include('php/carrito.php');
            break;
        case 'compras':
            include('php/compras.php');
            break;
        default:
            include('php/404.php');
            break;
    }
?>