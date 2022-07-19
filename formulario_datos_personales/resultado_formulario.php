<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {

    $nombre = $_REQUEST["txtNombre"];
    $dni = $_REQUEST["txtDni"];
    $tel = $_REQUEST["txtTel"];
    $edad = $_REQUEST["txtEdad"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Resultado de formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $dni ?></td>
                            <td><?php echo $tel ?></td>
                            <td><?php echo $edad ?></td>
                        </tr>

                    </tbody>
                </table>
                <a href="formulario_datos_personales.php"><button class="btn btn-primary">Volver</button></a>
            </div>
        </div>

    </main>

</body>

</html>