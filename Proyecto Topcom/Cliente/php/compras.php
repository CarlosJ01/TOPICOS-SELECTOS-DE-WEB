<?php include('header.php'); ?>
<main>
    <br>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h3 class="text-azul">Compras realizadas</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <p><strong>Usuario: </strong><span class='text-muted' id="usuario"></span></p>
                        <p><strong>Nombre: </strong><span class='text-muted' id="nombre"></span></p>
                        <p><strong>Correo electronico: </strong><span class='text-muted' id="correo"></span></p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong>CURP: </strong><span class='text-muted' id="curp"></span></p>
                        <p><strong>RFC: </strong><span class='text-muted' id="rfc"></span></p>
                    </div>
                    <div class="col-sm-12">
                        <p><strong>Direccion: </strong><span class='text-muted' id="direccion"></span></p>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th style="width: 1em;">#</th>
                                <th>Producto</th>
                                <th style="width: 5em;">Total</th>
                                <th style="width: 7em;">Fecha</th>
                            </tr>
                        </thead>
                        <tbody id="tablaCompras"> 
                        </tbody>
                    </table>
                </div>
            <br>
            <div id="cargarCompras">
                <div class="centrar">
                    <div class="centro">
                        <div class="preloader"></div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="js/compras.js"></script>
</main>
<?php include('footer.php'); ?>