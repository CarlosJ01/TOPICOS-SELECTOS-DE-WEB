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
        <div class="container">
            <img class="mb-4" src="img/logo.png" alt="Logotipo">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class='card-title'>Registro de cuentas</h4>
                        </div>
                        <div class="card-body">
                            <form action="" id="form-registro">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usuario">Usuario</label>
                                            <input id="usuario" class="form-control" type="text" name="usuario"
                                                pattern="^[a-zA-Z0-9.]{1,20}$" title="Solo puede contener letras, numeros y puntos" maxlength="20" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input id="password" class="form-control" type="password" name="password"
                                            pattern="^[a-zA-Z0-9.]{1,30}$" title="Solo puede contener letras, numeros y puntos" maxlength="30" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombreCompleto">Nombre completo</label>
                                            <input id="nombreCompleto" class="form-control" type="text" name="nombreCompleto" 
                                            pattern="^[a-zA-ZñÑáéíóú][a-zA-ZñÑáéíóú.\s]{1,100}$" title="El nombre completo solo puede poseer letras" maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="correo">Correo electronico</label>
                                            <input id="correo" class="form-control" type="email" name="correo" maxlength="100" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="curp">CURP</label>
                                            <input id="curp" class="form-control" type="text" name="curp"
                                            pattern="^([A-Z&]|[a-z&]{1})([AEIOU]|[aeiou]{1})([A-Z&]|[a-z&]{1})([A-Z&]|[a-z&]{1})([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([HM]|[hm]{1})([AS|as|BC|bc|BS|bs|CC|cc|CS|cs|CH|ch|CL|cl|CM|cm|DF|df|DG|dg|GT|gt|GR|gr|HG|hg|JC|jc|MC|mc|MN|mn|MS|ms|NT|nt|NL|nl|OC|oc|PL|pl|QT|qt|QR|qr|SP|sp|SL|sl|SR|sr|TC|tc|TS|ts|TL|tl|VZ|vz|YN|yn|ZS|zs|NE|ne]{2})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([0-9]{2})$"
                                            title="No posee formato de CURP"
                                            minlength="18" maxlength="18" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rfc">RFC</label>
                                            <input id="rfc" class="form-control" type="text" name="rfc"
                                            pattern="^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$"
                                            title="No posee formato de RFC"
                                            minlength="13" maxlength="13" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Direccion</label>
                                    <input id="direccion" class="form-control" type="text" name="direccion" maxlength="100" placeholder="Calle Numero, Colonia, Ciudad" required>
                                </div>
                                <div class="text-center">
                                    <input class="jCaptcha" type="text" placeholder="Resuelve el Captcha" required>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary" form="form-registro" title="Registrase como nuevo usuario" id='btnRegistro' disable>Registrarse</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center text-light">
                <p>¿Tienes cuenta? <a href="login">Inicia Sesión</a></p>
            </div>
        </div>
        
        <script src="js/jCaptcha.js"></script>
        <script src="js/captcha.js"></script>
        <script src="js/registro.js"></script>
    </body>
</html>