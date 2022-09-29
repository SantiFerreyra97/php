<?php

include_once("config.php");

include_once("entidades/producto.php");
include_once("entidades/tipoproducto.php");

$producto = new Producto();
$tipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $producto->cargarFormulario($_REQUEST);
        //Estoy actualizando
        if (isset($_GET["id"]) && $_GET["id"] > 0) {

            if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi");
                $archivo_tmp = $_FILES["archivo"]["tmp_name"];
                $nombreArchivo = $_FILES["archivo"]["name"];
                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                $nombreImagen = "$nombreAleatorio.$extension";


                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    //elimino la imagen anterior
                    $productoAnt = new Producto();
                    $productoAnt->idproducto = $_GET["id"];
                    $productoAnt->obtenerPorId();
                    if (file_exists("files/$productoAnt->imagen")) {
                        unlink("files/$productoAnt->imagen");
                    }
                    //Subo la imagen nueva
                    move_uploaded_file($archivo_tmp, "files/$nombreImagen");
                }
                $producto->imagen = $nombreImagen;
            } else {
                $productoAnt = new Producto();
                $productoAnt->idproducto = $_GET["id"];
                $productoAnt->obtenerPorId();
                $producto->imagen = $productoAnt->imagen;
            }
                $producto->actualizar();
                $msg["texto"] = "Actualizado correctamente";
                $msg["codigo"] = "alert-success";
                
         } else {

            if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi");
                $archivo_tmp = $_FILES["archivo"]["tmp_name"];
                $nombreArchivo = $_FILES["archivo"]["name"];
                $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
                $nombreImagen = "$nombreAleatorio.$extension";


                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    $nombreImagen = "$nombreAleatorio.$extension";
                    move_uploaded_file($archivo_tmp, "files/$nombreImagen");
                }
                $producto->imagen = $nombreImagen;
            }

                $producto->insertar();
                $msg["texto"] = "Insertado correctamente";
                $msg["codigo"] = "alert-success";
            
            }
    } else if (isset($_POST["btnBorrar"])) {
        $producto->cargarFormulario($_REQUEST);
        $producto->obtenerPorId();
        if (file_exists("files/$producto->imagen")) {
            unlink("files/$producto->imagen");
        }

        $producto->eliminar();
        header("Location: producto-listado.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $producto->cargarFormulario($_REQUEST);
    $producto->obtenerPorId();
}
$pg = "Formulario de Productos";

include_once("header.php");
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value=" <?php echo $producto->nombre ?>">
        </div>
        <div class="col-6 form-group">
            <label for="txtNombre">Tipo producto:</label>
            <select name="lstTipoProducto" id="lstTipoProducto" class="form-control selectpicker" value="<?php echo $producto->tipoproducto ?>">
                <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aTipoProductos as $tipo) : ?>
                    <?php if ($tipo->idtipoproducto == $producto->fk_idtipoproducto) : ?>
                        <option selected value="<?php echo $tipo->idtipoproducto; ?>"><?php echo $tipo->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $tipo->idtipoproducto; ?>"><?php echo $tipo->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>

        </div>
        <div class="col-6 form-group">
            <label for="txtCuit">Cantidad:</label>
            <input type="number" required class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $producto->cantidad ?>">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" required value="<?php echo $producto->precio ?>">
        </div>
        <div class="col-12 form-group">
            <label for="txtDescripcion">Descripción:</label>
            <textarea type="text" name="txtDescripcion" id="txtDescripcion" cols="30" rows="10" value="<?php echo $producto->descripcion ?>"></textarea>
        </div>
        <div class="col-6 form-group">
            <label for="fileImagen">Imagen:</label>
            <input type="file" class="form-control-file" name="archivo" id="imagen">
            <?php if ($producto->imagen != "") : ?>
                <img src="files/<?php echo $producto->imagen; ?>" class="img-thumbnail">
            <?php endif; ?>
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