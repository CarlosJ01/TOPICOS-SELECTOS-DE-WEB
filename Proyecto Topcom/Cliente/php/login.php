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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/toastr.min.css">
        <link rel="stylesheet" href="css/signin.css">
        
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
    <body class='text-center bg-dark'>
        <form class="form-signin" id="form-login">
            <img class="mb-4" src="img/logo.png" alt="Logotipo">
            <br><br>
            <h1 class="h3 mb-3 font-weight-normal text-light">Inicio de sesión</h1>
            <div class="form-group">
                <input id="usuario" class="form-control" type="text" name="usuario" maxlength="255" placeholder="Usuario" require>
            </div>
            <div class="form-group">
                <input id="password" class="form-control" type="password" name="password" maxlength="255" placeholder="Contraseña" require>
            </div>
            
            <button class="btn btn-lg btn-primary btn-block" form="form-login" type="submit" id="btn-login">Ingresar</button>
            
            <br><br>
            <div class="text-center text-light">
                <p>¿No tienes cuenta? <a href="registro">Regístrate</a></p>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021 TOPCOM, Inc.</p>
        </form>

        <script src="js/login.js"></script>
    </body>
</html>