$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "https://topcom-backend.herokuapp.com/listado-productos",
        data: {},
        dataType: "json",
        success: function (json) {
            $('#contenedorProductos').empty();
            $('#contenedorProductos').append(`
                <br>
                <h2 class="title text-center">Productos disponibles</h2>
            `);
            cont = 0;
            json.forEach(arreglo => {
                let html = `
                    <div class="features_items">
                        <div class="row">
                `;
                arreglo.forEach(producto => {
                    producto.stock = parseInt(Math.random()*300);
                    html += `
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="https://topcom-backend.herokuapp.com${producto.imagen}" alt="Imagen del producto" />
                                            <h2>$${producto.precio}</h2>
                                            <p>
                                                ${producto.nombre}
                                                <br>
                                                Stock: ${producto.stock}
                                            </p>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                            <h2>$${producto.precio}</h2>
                                            <p>${producto.descripcion}</p>
                                            <button type="button" class="btn btn-light add-to-cart">
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
            });
        }
    });
});