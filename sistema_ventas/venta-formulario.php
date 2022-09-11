<?php
include_once("config.php");
include_once("header.php");

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ventas</h1>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="cliente-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 form-group">
            <?php if (isset($msg) && $msg != "") : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            <label for="txtFechaNac" class="d-block">Fecha y hora:</label>
            <select class="form-control d-inline" name="txtDia" id="txtDia" style="width: 80px;">
                <option selected="" disabled="">DD</option>
            </select>
            <select class="form-control d-inline" name="txtMes" id="txtMes" style="width: 80px;">
                <option selected="" disabled="">MM</option>
            </select>
            <select class="form-control d-inline" name="txtAnio" id="txtAnio" style="width: 100px;">
                <option selected="" disabled="">YYYY</option>
            </select>
            <input type="time" required="" class="form-control d-inline" style="width: 120px;" name="txtTime">
        </div>
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select required="" class="form-control selectpicker" data-live-search="true" name="lstCliente" id="lstCliente" value="">
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select required="" class="form-control selectpicker" data-live-search="true" name="lstProducto" id="lstProducto" value="">
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecioUni">Precio unitario:</label>
            <input type="number" required class="form-control" name="txtPrecioUniCurrency" id="txtPrecioUniCurrency" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" class="form-control" name="txtCantidad" id="txtCantidad" required value="" placeholder="0">
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" class="form-control" name="txtTotal" id="txtTotal" required value="" placeholder="0">
        </div>

    </div>

</div>

<script>

</script>
<?php include_once("footer.php"); ?>