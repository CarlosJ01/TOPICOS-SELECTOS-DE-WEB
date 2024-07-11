<?php include('header.php'); ?>
<main>
    <br>
    <div class="container" id="contenedorProductos">
        <div class="centrar">
            <div class="centro">
                <div class="preloader"></div>
            </div> 
        </div>
    </div>

    <div class="modal fade" id="agregarCarritoModal" tabindex="-1" role="dialog" aria-labelledby="agregarCarritoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="agregarCarritoModalLabel">Agregar al carrito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="idArticulo" value="0">
                <div class="row">
                    <div class="col-md-6">
                        <img src="" class="img-fluid mx-auto" alt="Artiuculo a agregar" id="imgAgregar">
                        <div class="form-group">
                            <label for="cantidadAgregar">Cantidad</label>
                            <input id="cantidadAgregar" class="form-control" type="number" name="cantidadAgregar" min='1' max="100" value='1'>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 id='nombreAgregar'></h3>
                        <p id="descripcionAgregar"></p>
                        <p>Presio: <strong id="presioAgregar"></strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnAgregar" title='Agregar articulo al carrito'><i class="fas fa-cart-plus"></i> Agregar</button>
            </div>
            </div>
        </div>
    </div>

    <script src="js/productos.js"></script>
</main>
<?php include('footer.php'); ?>