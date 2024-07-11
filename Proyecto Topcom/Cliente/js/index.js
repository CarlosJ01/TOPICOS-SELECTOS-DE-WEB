const globales = {
    'urlWS': 'https://topcom-2-web-services.herokuapp.com',
    'usuario': localStorage.getItem('usuario')
};

$(document).ready(function () {
    if (globales.usuario == null) {
        $('#carrito').addClass('d-none');
        $('#compras').addClass('d-none');
        $('#logout').addClass('d-none');
    } else {
        $('#Login').addClass('d-none');
    }

    $('#salir').click(function (e) { 
        e.preventDefault();
        localStorage.removeItem('usuario');
        toastr.success('Cierre de sesión exitoso');
        setTimeout( function() {location.reload()}, 500 );
    });
});