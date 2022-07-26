<?php
session_start();

if (isset($_SESSION["listadoClientes"])) {
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
};


if ($_POST) {
    //Asignamos en variables los datos que vienen del formulario

    if (isset($_POST["btnEnviar"])) {

        $nombre = $_POST["txtNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTel"];
        $edad = $_POST["txtEdad"];

        //creamos un array que contendrá el listado de clientes
        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad
        );
        $_SESSION["listadoClientes"] = $aClientes;
    } else if (isset($_POST["btnEliminar"])) {
        session_destroy();
        header("Location: clientes_session.php");
        /* o tambien puede ser */
    }
}
//pregunto si viene pos en la query string
if (isset($_GET["pos"])) {
    //recupero el dato que viene desde la query string via get
    $pos = $_GET["pos"];
    //elimina la posicion del array indicada
    unset($aClientes[$pos]);
    //Actualizo l avariable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_session.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 p-4">
                <form action="" method="POST" class="form">
                    <div class="py-2">
                        <label for="">Nombre:</label>
                        <input class="form-control" type="text" name="txtNombre" id="txtNombre" placeholder="Ingrese el nombre y apellido">
                    </div>
                    <div class="py-2">
                        <label for="">DNI:</label>
                        <input class="form-control" type="text" name="txtDni" id="txtDni">
                    </div>
                    <div class="py-2">
                        <label for="">Teléfono:</label>
                        <input class="form-control" type="text" name="txtTel" id="txtTel">
                    </div>
                    <div class="py-2">
                        <label for="">Edad:</label>
                        <input class="form-control" type="number" name="txtEdad" id="txtEdad">
                    </div>
                    <div class="py-2">
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
            <div class="p-4 mx-5 col-7">
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>DNI</td>
                            <td>Teléfono</td>
                            <td>Edad</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td><?php echo $cliente["nombre"] ?></td>
                                <td><?php echo $cliente["dni"] ?></td>
                                <td><?php echo $cliente["telefono"] ?></td>
                                <td><?php echo $cliente["edad"] ?></td>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>

            </div>
        </div>
    </main>
</body>

</html>