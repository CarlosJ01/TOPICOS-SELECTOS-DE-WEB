<?php include('header.php'); ?>
<main>
    <br>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h3 class="text-azul">Carrito de Compras</h3>
                <hr>
                <div id="cargarCarrito">
                    <div class="centrar">
                        <div class="centro">
                            <div class="preloader"></div>
                        </div> 
                    </div>
                </div>
                <div class="row" id="compra">
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th style="width: 1em;">#</th>
                                <th>Producto</th>
                                <th style="width: 3em;">Subtotal</th>
                                <th style="width: 3em;">Quitar</th>
                            </tr>
                        </thead>
                        <tbody id="tablaCarrito"> 
                        </tbody>
                    </table>
                </div>
            <br>
        </div>
    </div>

    <div id="carrito0"></div>

    <!-- Cancelar compra -->
    <div class="modal fade" id="cancelarModal" tabindex="-1" role="dialog" aria-labelledby="cancelarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
            <h5 class="modal-title text-light" id="cancelarModalLabel">Cancelar compra</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p>Se regresarán los productos al catalogo y se eliminarán de su carrito de compras</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" id="btnCancelar" title="Confirmar cancelacion">Confirmar</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Quitar producto -->
    <div class="modal fade" id="quitarProductoModal" tabindex="-1" role="dialog" aria-labelledby="quitarProductoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
            <h5 class="modal-title text-light" id="quitarProductoModalLabel">Quitar producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="idQuitar">
                <h3 id="nombreQuitar"></h3>
                <div class="form-group">
                    <label for="cantidad">¿Cuál es la cantidad que desea quitar?</label>
                    <input id="cantidad" class="form-control" type="number" name="cantidad" min="1" max="100" value="1">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-danger" title="Confirmar quitar producto" id="btnQuitar">Confirmar</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Comprar -->
    <div class="modal fade" id="comprarModal" tabindex="-1" role="dialog" aria-labelledby="comprarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h5 class="modal-title text-light" id="comprarModalLabel">Comprar productos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p>Se comprarán los productos y se quitarán de su carrito</p>
                <p id="comprarPresio"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success" title="Confirmar compra" id="btnComprar">Confirmar</button>
            </div>
        </div>
        </div>
    </div>

    <script src="js/carrito.js"></script>
</main>
<?php include('footer.php'); ?>