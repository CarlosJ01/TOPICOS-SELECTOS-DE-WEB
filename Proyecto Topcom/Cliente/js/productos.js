let productos = {
    'json': []
};

let funciones = {
    clickAgregarCarrito: function () {  
        let id = $(this).data('id');
        /* Si no esta logeado */
        if (globales.usuario == null) {
            toastr.warning('Inicie sesión para agregar artículos');
            return;
        }

        /* Buscar producto seleccionado */
        let seleccionado = {};
        productos.json.every(function(producto, index) {
            if (producto.id == id) {
                seleccionado = producto;
                return false;
            }
            return true;
        });

        /* Datos del modal */
        $('#idArticulo').val(seleccionado.id);
        $('#imgAgregar').attr('src', `${globales.urlWS}${seleccionado.imagen}`);
        $('#cantidadAgregar').val(1);
        $('#cantidadAgregar').attr('max', seleccionado.stock);
        $('#nombreAgregar').text(seleccionado.nombre);
        $('#descripcionAgregar').text(seleccionado.descripcion);
        $('#presioAgregar').text(seleccionado.precio);
        
        /* Mostrar el modal */
        $('#agregarCarritoModal').modal('show');
    },
    agregarArticuloCarrito: function () {
        $('#btnAgregar').attr("disabled", true);
        $('#btnAgregar').text('Cargando');

        let usuario = JSON.parse(globales.usuario);  
        datos = {
            'idUsuario': usuario.id,
            'idArticulo': $('#idArticulo').val(),
            'cantidad': $('#cantidadAgregar').val()
        }

        $.ajax({
            type: "post",
            url: `${globales.urlWS}/api/web-services/agregar-carrito`,
            data: datos,
            dataType: "json",
            success: function (response) {
                if (response.error) {
                    toastr.error(response.error);
                    $('#btnAgregar').attr("disabled", false);
                    $('#btnAgregar').html('<i class="fas fa-cart-plus"></i> Agregar');
                    return;
                }
                if (response.success) {
                    toastr.success(response.success);
                    setTimeout( function() { window.location.href = "carrito"; }, 1000 );
                }
            }
        });

    }
};

$(document).ready(function () {
    $('#productos').addClass('active');
    /* Pedir productos al WS */
    $.ajax({
        type: "get",
        url: `${globales.urlWS}/api/web-services/get-articulos`,
        data: {},
        dataType: "json",
        success: function (response) {
            if (response.success) {
                $('#contenedorProductos').empty();
                $('#contenedorProductos').append(`
                    <br>
                    <h2 class="title text-center">Productos disponibles</h2>
                `);
                let i = 1;
                let html = `
                    <div class="features_items">
                        <div class="row">
                `;
                response.success.forEach(producto => {                    
                    html += `
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="${globales.urlWS}${producto.imagen}" alt="Imagen del producto" />
                                        <h2>$${producto.precio}</h2>
                                        <p>
                                            ${producto.nombre}
                                            <br>
                                            <strong>Stock: ${producto.stock}</strong>
                                        </p>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                        <h2>$${producto.precio}</h2>
                                        <p>${producto.descripcion}</p>
                                        <button type="button" class="btn btn-light add-to-cart" data-id="${producto.id}">
                                            <i class="fas fa-cart-plus"></i> Añadir al carrito
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });
                html += `
                        </div>
                    </div
                `;

                $('#contenedorProductos').append(html);
                $(".add-to-cart").click(funciones.clickAgregarCarrito);
                productos.json = response.success;
            } else {
                toastr.error('Sin conexion al servidor');
            }
        }
    });

    /* Agregar articulo al carrito */
    $('#btnAgregar').click(function (e) { 
        e.preventDefault();
        funciones.agregarArticuloCarrito();
    });
});