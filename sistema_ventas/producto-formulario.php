<?php

include_once("config.php");
include_once("header.php");

?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="cliente-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtNombre">Tipo producto:</label>
            <select name="lstTipoProducto" id="lstTipoProducto" class="form-control selectpicker" ></select>
        </div>
        <div class="col-6 form-group">
            <label for="txtCuit">Cantidad:</label>
            <input type="number" required class="form-control" name="txtCantidad" id="txtApellido" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" class="form-control" name="txtCorreo" id="txtCorreo" required value="" placeholder="0">
        </div>
        <div class="col-12 form-group">
            <label for="txtDescripcion">Descripción:</label>
            <textarea type="text" name="txtDescripcion" id="txtDescripcion" cols="30" rows="10"></textarea>
        </div>
        <div class="col-6 form-group">
            <label for="fileImagen">Imagen:</label>
            <input type="file" class="form-control-file" name="imagen" id="imagen">
            <img src="files/" class="img:thumbnail">
        </div>
    </div>





</div>


<script>
    ClassicEditor
        .create(document.querySelector('#txtDescripcion'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include_once "footer.php"; ?>