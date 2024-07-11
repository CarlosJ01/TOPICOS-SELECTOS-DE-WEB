$(document).ready(function () {
    /* Si esta logiado para sacarlo */
    if (globales.usuario != null) {
        location.replace('inicio');
    }

    $('#form-login').submit(function (e) { 
        e.preventDefault();
        $('#btn-login').attr("disabled", true);

        if ($('#usuario').val() == '') {
            toastr.error('Ingrese su usuario');
            $('#btn-login').attr("disabled", false);
            return;
        }
        if ($('#password').val() == '') {
            toastr.error('Ingrese su contraseña');
            $('#btn-login').attr("disabled", false);
            return;
        }

        let datos = {
            'usuario': $('#usuario').val(),
            'password': $('#password').val()
        }

        $('#btn-login').text('Cargando');
        $.ajax({
            type: "post",
            url: `${globales.urlWS}/api/web-services/login`,
            data: datos,
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    toastr.error(response.error);
                    $('#btn-login').attr("disabled", false);
                    $('#btn-login').text('Ingresar');
                    return;
                }

                if (response.success) {
                    localStorage.setItem('usuario', JSON.stringify(response.success));
                    toastr.success('Inicio de sesión exitoso');
                    setTimeout( function() { window.location.href = "inicio"; }, 500 );
                }
            }
        });
    });
});