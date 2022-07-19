<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de datos personales</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-6 py-3">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="resultado_formulario.php">
                    <?php if (isset($msg)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $msg; ?>
                        </div>
                    <?php } ?>

                    <div class="py-3">
                        <label for="txtUsuario">Nombre:* </label>
                        <input type="text" class="form-control" name="txtNombre" id="txtNombre">
                    </div>
                    <div class="py-3">
                        <label for="txtClave">DNI:*</label>
                        <input type="text" class="form-control" name="txtDni" id="txtDni">
                    </div>
                    <div class="py-3">
                        <label for="txtUsuario">Teléfono:* </label>
                        <input type="txt" class="form-control" name="txtTel" id="txtTel">
                    </div>
                    <div class="py-3">
                        <label for="txtClave">Edad:*</label>
                        <input type="number" class="form-control" name="txtEdad" id="txtEdad">
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