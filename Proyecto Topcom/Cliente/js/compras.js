$(document).ready(function () {
    /* Si esta logiado para sacarlo */
    if (globales.usuario == null) {
        location.replace('inicio');
    }
    $('#compras').addClass('active');

    let usuario = JSON.parse(globales.usuario);
    $('#usuario').text(usuario.usuario);
    $('#nombre').text(usuario.nombre);
    $('#correo').text(usuario.correo);
    $('#curp').text(usuario.curp);
    $('#rfc').text(usuario.rfc);
    $('#direccion').text(usuario.direccion);

    $.ajax({
        type: "get",
        url: `${globales.urlWS}/api/web-services/get-compras/${usuario.id}`,
        data: {},
        dataType: "json",
        success: function (response) {
            let htmlTabla = ``;
            let i = 1;

            response.success.forEach(compra => {
                let total = compra.cantidad * parseFloat(compra.articulo.precio.replace(',', ''));
                htmlTabla += `
                    <tr>
                        <td class="text-center">${i}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="${globales.urlWS}${compra.articulo.imagen}" class="img-fluid mx-auto" alt="Imagen del producto">
                                </div>
                                <div class="col-md-8">
                                    <h3>${compra.articulo.nombre}</h3>
                                    <p>${compra.articulo.descripcion}</p>
                                    <p>Cantidad: <strong>${compra.cantidad}</strong></p>
                                    <p>Presio: <strong>$${compra.articulo.precio}</strong></p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"><strong>$${total}</strong></td>
                        <td>
                            ${compra.created_at}
                        </td>
                    </tr>
                `;
                i++;
            });

            $('#cargarCompras').empty();
            $('#tablaCompras').empty();
            $('#tablaCompras').html(htmlTabla);
            if (response.success.length == 0) {
                $('#cargarCompras').html(`<div class="centrar">Sin compras realizadas</div>`);
            }
        }
    });
});