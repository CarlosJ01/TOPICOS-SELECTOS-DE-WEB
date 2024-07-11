let carrito = {
    'json': []
}
let funciones = {
    clickQuitar: function () {  
        let id = $(this).data('id');
        
        let seleccionado = {};
        carrito.json.every(function(pedido, index) {
            if (pedido.id == id) {
                seleccionado = pedido;
                return false;
            }
            return true;
        });

        /* Datos del modal */
        $('#idQuitar').val(seleccionado.id);
        $('#nombreQuitar').text(seleccionado.articulo.nombre);
        $('#cantidad').val(seleccionado.cantidad);
        $('#cantidad').attr('max', seleccionado.cantidad);
        
        /* Mostrar el modal */
        $('#quitarProductoModal').modal('show');
    },
    quitarArticulo: function () {  
        $('#btnQuitar').attr("disabled", true);
        datos = {
            'id': $('#idQuitar').val(),
            'cantidad': $('#cantidad').val(),
        }
        $.ajax({
            type: "post",
            url: `${globales.urlWS}/api/web-services/quitar-articulo`,
            data: datos,
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    toastr.error(response.error);
                    $('#btnQuitar').attr("disabled", false);
                    return;
                }
                if (response.success) {
                    toastr.success(response.success);
                    setTimeout( function() {location.reload()}, 1500 );
                }
            }
        });
    },
    cancelarCompra: function () {
        $('#btnCancelar').attr("disabled", true);

        let usuario = JSON.parse(globales.usuario);  
        $.ajax({
            type: "post",
            url: `${globales.urlWS}/api/web-services/cancelar-compra/${usuario.id}`,
            data: {},
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    toastr.error(response.error);
                    $('#btnQuitar').attr("disabled", false);
                    return;
                }
                
                if (response.success) {
                    toastr.success(response.success);
                    setTimeout( function() {location.reload()}, 1500 );
                }
            }
        });
    },
    Comprar: function () {  
        $('#btnComprar').attr("disabled", true);

        let usuario = JSON.parse(globales.usuario);  
        $.ajax({
            type: "post",
            url: `${globales.urlWS}/api/web-services/comprar/${usuario.id}`,
            data: {},
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    toastr.error(response.error);
                    $('#btnQuitar').attr("disabled", false);
                    return;
                }
                if (response.success) {
                    toastr.success(response.success);
                    setTimeout( function() { window.location.href = "compras"; }, 1500 );
                }
            }
        }); 
    }
};
$(document).ready(function () {
    /* Si esta logiado para sacarlo */
    if (globales.usuario == null) {
        location.replace('inicio');
    }
    $('#carrito').addClass('active');

    /* Peticion para el carrito de compras */
    let usuario = JSON.parse(globales.usuario);
    $.ajax({
        type: "get",
        url: `${globales.urlWS}/api/web-services/get-carrito/${usuario.id}`,
        data: {},
        dataType: "json",
        success: function (response) {
            if (response.success) {
                let total = 0;
                let numeroProductos = 0;
                let htmlTabla = ``;
                let i = 1;
                response.success.forEach(pedido => {
                    let subtotal = pedido.cantidad * parseFloat(pedido.articulo.precio.replace(',', '')).toFixed(2);
                    total += subtotal;
                    numeroProductos += pedido.cantidad;
                    htmlTabla += `
                        <tr>
                            <td class="text-center">${i}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="${globales.urlWS}${pedido.articulo.imagen}" class="img-fluid mx-auto" alt="Imagen del producto">
                                    </div>
                                    <div class="col-md-8">
                                        <h3>${pedido.articulo.nombre}</h3>
                                        <p>${pedido.articulo.descripcion}</p>
                                        <p>Cantidad: <strong>${pedido.cantidad}</strong></p>
                                        <p>Presio: <strong>$${pedido.articulo.precio}</strong></p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong>$${subtotal}</strong></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger quitar-carrito" data-id="${pedido.id}" title="Quitar articulo del carrito"><i class="fas fa-minus-circle"></i></button>
                            </td>
                        </tr>
                    `;
                    i++;
                });

                /* Alterar HTML */
                $('#cargarCarrito').empty();
                $('#compra').empty();
                $('#tablaCarrito').empty();

                $('#compra').html(`
                    <div class="col-md-12 text-right">
                        <strong>Total (${numeroProductos} productos): </strong><strong class="text-danger">$${total.toFixed(2)}</strong>
                    </div>
                    <br><br>
                    <div class="col-6 text-left">
                        <button type="button" class="btn btn-danger compra-cancela" title="Cancelar compra y regresar articulos" data-toggle="modal" data-target="#cancelarModal"><i class="fas fa-trash-alt"></i> Cancelar</button>
                    </div>
                    <div class="col-6 text-right">
                        <button type="button" class="btn btn-success compra-cancela" title="Proceder con la compra de los productos del carrito" data-toggle="modal" data-target="#comprarModal"><i class="fas fa-check-circle"></i> Comprar</button>
                    </div>
                `);
                $('#tablaCarrito').html(htmlTabla);
                $('#comprarPresio').html(`<p><strong>Total (${numeroProductos} productos): </strong><strong class="text-danger">${total.toFixed(2)}</strong></p>`);

                $('.quitar-carrito').click(funciones.clickQuitar);
                
                if (response.success.length == 0) {
                    $('#carrito0').html(`<div class="centrar">Sin productos en el carrito</div>`);
                    $('.compra-cancela').attr("disabled", true);
                }

                carrito.json = response.success;
            }
        }
    });

    $('#btnQuitar').click(function (e) { 
        e.preventDefault();
        funciones.quitarArticulo();
    });

    $('#btnCancelar').click(function (e) { 
        e.preventDefault();
        funciones.cancelarCompra();
    });

    $('#btnComprar').click(function (e) { 
        e.preventDefault();
        funciones.Comprar();
    });
});