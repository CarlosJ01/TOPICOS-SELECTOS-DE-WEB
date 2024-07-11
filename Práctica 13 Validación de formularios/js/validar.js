let validaciones = {
    validarUsuario: function (usuario) { 
        if (usuario.length > 0 && usuario.length <= 20) {
            let expresion = /^[a-zA-Z0-9.]{1,20}$/;
            return expresion.test(usuario);
        }
        return false;
    },
    validarPassword: function (password) {  
        if (password.length > 0 && password.length <= 30) {
            let expresion = /^[a-zA-Z0-9.]{1,30}$/;
            return expresion.test(password);
        }
        return false;
    },
    validarNombreCompleto: function (nombreCompleto) {
        if (nombreCompleto.length > 0 && nombreCompleto.length <= 100) {
            let expresion = /^[a-zA-ZñÑáéíóú][a-zA-ZñÑáéíóú.\s]{1,100}$/;
            return expresion.test(nombreCompleto);
        }
        return false;
    },
    validarCURP: function (curp) {  
        if (curp.length == 18) {
            let expresion = /^([A-Z&]|[a-z&]{1})([AEIOU]|[aeiou]{1})([A-Z&]|[a-z&]{1})([A-Z&]|[a-z&]{1})([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([HM]|[hm]{1})([AS|as|BC|bc|BS|bs|CC|cc|CS|cs|CH|ch|CL|cl|CM|cm|DF|df|DG|dg|GT|gt|GR|gr|HG|hg|JC|jc|MC|mc|MN|mn|MS|ms|NT|nt|NL|nl|OC|oc|PL|pl|QT|qt|QR|qr|SP|sp|SL|sl|SR|sr|TC|tc|TS|ts|TL|tl|VZ|vz|YN|yn|ZS|zs|NE|ne]{2})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([^A|a|E|e|I|i|O|o|U|u]{1})([0-9]{2})$/;
            return expresion.test(curp);
        }
        return false;
    },
    validarRFC: function (rfc) {  
        if (rfc.length == 13) {
            let expresion = /^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/;
            return expresion.test(rfc);
        }
        return false;
    },
    validarDireccion: function (direccion) {
        direccion = direccion.trim();
        if (direccion != ' ' && direccion.length > 0) {
            return true;
        }
        return false;
    },
    validarCorreo: function (correo) {
        if (correo.length > 0 && correo.length <= 100) {
            let expresion = /^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
            return expresion.test(correo);
        }
        return false;
    }
};

$(document).ready(function () {
    $('#form-registro').submit(function (e) {
        if (! validaciones.validarUsuario($('#usuario').val())){
            alert('El nombre de usuario solo puede contener letras, numeros y puntos maximo 20 caracteres');
            return false;
        }
        if (! validaciones.validarPassword($('#password').val())){
            alert('La contraseña solo puede contener letras, numeros y puntos maximo 30 caracteres');
            return false;
        }
        if (! validaciones.validarNombreCompleto($('#nombreCompleto').val())){
            alert('El nombre completo solo puede contener letras, espacios y puntos maximo 100 caracteres');
            return false;
        }
        if (! validaciones.validarCURP($('#curp').val())){
            alert('La CURP ingresada, no tiene el formato adecuado (18 caracteres)');
            return false;
        }
        if (! validaciones.validarRFC($('#rfc').val())){
            alert('El RFC ingresado, no tiene el formato adecuado (13 caracteres)');
            return false;
        }
        if (! validaciones.validarDireccion($('#direccion').val())) {
            alert('Ingrese una direccion valida');
            return false;
        }
        if (! validaciones.validarCorreo($('#correo').val())) {
            alert('Ingrese una correo electronico valido');
            return false;
        }
        console.log('Datos validados');
    });
});