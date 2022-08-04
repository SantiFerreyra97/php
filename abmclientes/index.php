<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//preguntar si existe el archivo

if (file_exists("archivo.txt")) {
    //Vamos a leerlo y lo almacenamos en jsonClientes
    $jsonClientes = file_get_contents("archivo.txt",);

    //Convertir jsonClientes a un array llamado a Clientes
    json_decode($jsonClientes, true);
} else {
    //Si no existe el archivo
    //creamos un aClientes inicializado como un array vacio
    $aClientes = array();
}


if ($_POST) {
    $documento = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    $aClientes[] = array(
        "documento" => $documento,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo
    );

    //Convertir el array de clientes a jsonCLientes
    $jsonClientes = json_encode($aClientes);

    //almacenar el string jsonCLientes en el archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-5 p-4">
                <form action="" method="POST" class="form" enctype="multipart/form-data">
                    <div class="py-2">
                        <label for="">DNI:*</label>
                        <input class="form-control" type="text" name="txtDni" id="txtDni">
                    </div>
                    <div class="py-2">
                        <label for="">Nombre:*</label>
                        <input class="form-control" type="text" name="txtNombre" id="txtNombre">
                    </div>

                    <div class="py-2">
                        <label for="">Teléfono:*</label>
                        <input class="form-control" type="text" name="txtTelefono" id="txtTelefono">
                    </div>
                    <div class="py-2">
                        <label for="">Correo:*</label>
                        <input class="form-control" type="mail" name="txtCorreo" id="txtEdad">
                    </div>
                    <div class="py-2">
                        <label for="">Archivo adjunto:</label>
                        <input class="" type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos permitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div class="py-2 float-end">
                        <button type="submit" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        <a href="index.php" class="btn btn-danger my-2">NUEVO</a>
                    </div>
                </form>
            </div>
            <div class="p-4 mx-5 col-6">
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <td>Imagenes</td>
                            <td>DNI</td>
                            <td>Nombre</td>
                            <td>Correo</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $cliente) : ?>
                            <tr>
                                <td></td>
                                <td><?php echo $cliente["documento"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                    <a href=""><i class="bi bi-pencil-fill"></i></a>
                                    <a href=""><i class="bi bi-trash-fill"></i></a>
                                </td> 
                            </tr>

                        <?php endforeach; ?>
                    </tbody>


                </table>

            </div>
        </div>
    </main>
</body>

</html>