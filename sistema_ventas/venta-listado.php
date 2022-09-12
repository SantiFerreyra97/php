<?php

include_once "config.php";

include_once("header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Listado de ventas</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover border">
        <tr>
            <th style="width: 170px;">Fecha</th>
            <th style="width: 130px;">Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
            <th style="width: 150px;">Total</th>
            <th style="width: 110px;">Acciones</th>
        </tr>
        
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once("footer.php"); ?>