<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (file_exists("invitados.txt")) {
    $archivo = fopen("invitados.txt", "r");
    $aDocumentos = fgetcsv($archivo, 0, ",");
} else {
    $aDocumentos = array();
}


if ($_POST) {
    if (isset($_REQUEST['btnProcesar'])) {
        $dni = trim($_REQUEST["txtDni"]);
        if (in_array($dni, $aDocumentos)) {

            $mensaje = "Bienvenido.";
        } else {
            $mensaje = "No se encuentra en la lista de invitados.";
        }
    } else if (isset($_REQUEST['btnVip'])) {
        $codigo = trim($_REQUEST['txtCodigo']);

        if ($codigo == "verde") {
            $mensaje = "Su codigo de acceso es: " . rand(1000, 9999);
        } else {
            $mensaje = "Usted no tine pase VIP.";
        }
    }
}



 if ($_POST) {
    if (isset($_REQUEST['btnProcesar'])) {
        $dni = trim($_REQUEST["txtDni"]);
        if (in_array($dni, $aDocumentos)) {

            $aMensaje = array(
                "texto" => "¡Bienvenid@ $dni a la fiesta!",
                "estado" => "success"
            );
        } else {
            $aMensaje = array(
                "texto" => "No se encuentra en la lista de invitados.",
                "estado" => "danger"
            );
        }
    } else if (isset($_REQUEST['btnVip'])) {
        $codigo = trim($_REQUEST['txtCodigo']);
        if ($codigo == "negro") {
            $aMensaje = array("texto" => "Su código de acceso es " . rand(1000, 9999), "estado" => "success");
        } else {
            $aMensaje = array("texto" => "Ud. no tiene pase VIP", "estado" => "danger");
        }
    }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-2">
                <h1>Lista de invitados</h1>
            </div>
        </div>
        <?php if (isset($aMensaje)) : ?>
            <div class="col-12">
                <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                    <?php echo $aMensaje["texto"]; ?>
                </div>
            </div>
        <?php endif; ?>



        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="py-3">
                        <p>Complete el siguiente formulario:</p>
                    </div>
                    <div class="py-2">
                        <label class="pb-2" for="">Ingrese el DNI:</label>
                        <input type="number" name="txtDni" id="txtDni" class="form-control">
                        <button class="btn btn-primary" type="submit" name="btnProcesar">Verificar invitado</button>
                    </div>
                    <div class="py-2">
                        <label class="pb-2" for="">Ingrese el código secreto para el pase VIP:</label>
                        <input type="text" name="txtCodigo" id="txtCodigo" class="form-control">
                        <button class="btn btn-primary" type="submit" name="btnVip">Verificar código</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>