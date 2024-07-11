<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tienda de comercio de componente de computacion y servicios de computacion">
        <meta name="author" content="Carlos Jahir Castro Cázares">
        <meta name="keywords" content="tienda, computacion, componentes de pc, servicios de computacion">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <title>ToPCoM</title>

        <!-- Librerias -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/carousel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/preloader.css">
        <link rel="stylesheet" href="css/toastr.min.css">
        
        <!-- Librerias -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/toastr.min.js"></script>

        <!-- Estilos propios -->
        <link rel="stylesheet" href="css/index.css">
        <script src="js/index.js"></script>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="inicio"><img src="img/logo.png" id="logo" alt="Logotipo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item" id="inicio">
                <a class="nav-link" href="inicio">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" id="productos">
                <a class="nav-link" href="productos"><i class="fas fa-shopping-bag"></i> Productos</a>
              </li>
              <li class="nav-item" id="Login">
                <a class="nav-link" href="login"><i class="fas fa-user"></i> Login</a>
              </li>
              <li class="nav-item" id="carrito">
                <a class="nav-link" href="carrito"><i class="fas fa-shopping-cart"></i> Carrito</a>
              </li>
              <li class="nav-item" id="compras">
                <a class="nav-link" href="compras"><i class="fas fa-tags"></i> Compras</a>
              </li>
              <li class="nav-item" id="logout">
                <a class="nav-link" href="#" id="salir"><i class="fas fa-sign-out-alt"></i> Salir</a>
              </li>
            </ul>
            <span class="navbar-text text-azul" id="eslogan">
              Toda la computación que tú necesitas
            </span>
          </div>
        </nav>
      </header>