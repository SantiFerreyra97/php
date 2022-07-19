<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario == "admin" && $clave == "123456") {
        header("Location: http://localhost/php/formulario_login/acceso-confirmado.php");
    } else {
        $msg = "Valido para usuarios registrados";
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
            <div class="col-6 py-3">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="">
                    <?php if (isset($msg)) {?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $msg;?>
                        </div>
                    <?php } ?>
                    
                   
                    
                    <div class="py-3">
                        <label for="txtUsuario">Usuario: </label>
                        <input type="text" class="form-control" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="py-3">
                        <label for="txtClave">Clave</label>
                        <input type="password" class="form-control" name="txtClave" id="txtClave">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>

</html>