<?php
    /* Verifica que llegen todos los datos */
    if (isset($_GET['usuario']) && isset($_GET['password']) && isset($_GET['nombreCompleto']) 
        && isset($_GET['curp']) && isset($_GET['rfc']) && isset($_GET['direccion']) 
        && isset($_GET['correo'])) {
            /* Valida usuario */
            if (! validarUsuario($_GET['usuario'])) {
                echo 'El usuario solo puede tener letras, numeros o puntos (Max: 20 caracteres)';
                return;
            }
            /* Valida password */
            if (! validarPassword($_GET['password'])) {
                echo 'La contraseña solo puede tener letras, numeros o puntos (Max: 30 caracteres)';
                return;
            }
            /* Valida el nombre completo */
            if (! validarNombreCompleto($_GET['nombreCompleto'])) {
                echo 'El nombre completo solo puede tener letras, espacios y puntos (Max: 100 caracteres)';
                return;
            }
            /* Valida la CURP */
            if (! validarCURP($_GET['curp'])) {
                echo 'La curp no posee formato de CURP';
                return;
            }
            /* Valida el RFC */
            if (! validarRFC($_GET['rfc'])) {
                echo 'El rfc no posee formato de RFC';
                return;
            }
            /* Valida la Direccion */
            if (! validarDireccion($_GET['direccion'])) {
                echo 'Ingrese una direccion valida';
                return;
            }
            /* Validar el correo electronico */
            if (! validarCorreo($_GET['correo'])) {
                echo 'Ingrese una correo electronico valido';
                return;
            }
            echo '<h1>Datos resividos correctamente</h1>';
    } else{
        echo 'Faltan campos por enviar';
    }

    /* Funciones para validar los datos */
    function validarUsuario($usuario) {
        if ($usuario != null)
            if (strlen($usuario) > 0 && strlen($usuario) <= 20)
                return preg_match("/^[a-zA-Z0-9.]{1,20}$/", $usuario);
        return false;
    }
    function validarPassword($password) {
        if ($password != null)
            if (strlen($password) > 0 && strlen($password) <= 30)
                return preg_match("/^[a-zA-Z0-9.]{1,30}$/", $password);
        return false;
    }
    function validarNombreCompleto($nombreCompleto) {
        if ($nombreCompleto != null){
            $nombreCompleto = trim($nombreCompleto);
            if (strlen($nombreCompleto) > 0 && strlen($nombreCompleto) <= 100){
                return preg_match("/^[a-zA-ZñÑáéíóú][a-zA-ZñÑáéíóú.\s]{1,100}$/", $nombreCompleto);
            }
        }
        return false;
    }
    function validarCURP($curp) {
        if ($curp != null)
            if (strlen($curp) == 18)
                return preg_match("/^([A-Z&]|[a-z&]{1})([AEIOU]|[aeiou]{1})([A-Z&]|[a-z&]{1})([A-Z&]|[a-z&]{1})([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([HM]|[hm]{1})([AS|as|BC|bc|BS|bs|CC|cc|CS|cs|CH|ch|CL|cl|CM|cm|DF|df|DG|dg|GT|gt|GR|gr|HG|hg|JC|jc|MC|mc|MN|mn|MS|ms|NT|nt|NL|nl|OC|oc|PL|pl|QT|qt|QR|qr|SP|sp|SL|sl|SR|sr|TC|tc|TS|ts|TL|tl|VZ|vz|YN|yn|ZS|zs|NE|ne]{2})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([0-9]{2})$/", $curp);
        return false;
    }
    function validarRFC($rfc) {
        if ($rfc != null)
            if (strlen($rfc) == 13)
                return preg_match("/^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/", $rfc);
        return false;
    }
    function validarDireccion($direccion) {
        if ($direccion != null){
            $direccion = trim($direccion);
            if (strlen($direccion) > 0 && strlen($direccion) <= 100){
                return true;
            }
        }
        return false;
    }
    function validarCorreo($correo) {
        if ($correo != null)
            if (strlen($correo) > 0 && strlen($correo) <= 100)
                return preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/", $correo);
        return false;
    }
?>