$(document).ready(function () {
    $('#form-login').submit(function (e) {
        let firma = $('#firma').val();
        let usuario = $('#usuario').val();
        $('#certificado').val(CryptoJS.MD5(firma+usuario).toString());
    });
});