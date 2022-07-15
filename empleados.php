<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Definicion de pacientes
$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => "33300123",
    "nombre" => "David García",
    "sueldo" => "70550.25"
);
$aEmpleados[] = array(
    "dni" => "40874456",
    "nombre" => "Ana Del Valle",
    "sueldo" => 74700.00
);
$aEmpleados[] = array(
    "dni" => "67567565",
    "nombre" => "Andrés Perez",
    "sueldo" => 83000.00
);
$aEmpleados[] = array(
    "dni" => "75744545",
    "nombre" => "Vicotria Luz",
    "sueldo" => 58100.00
);

function calcularNeto($sueldo){
    return $sueldo - ($sueldo * 0.17);
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Lista de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                    <?php foreach ($aEmpleados as $empleado) { ?>
                        <tr>
                            <td><?php echo $empleado["dni"];  ?></td>
                            <td><?php echo mb_strtoupper($empleado["nombre"]);  ?></td>
                            <td>$<?php echo number_format(calcularNeto($empleado["sueldo"]), 2,  ",", ".");  ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <?php 
                //Uso
                echo "Cantidad de empleados activos: " . count($aEmpleados) . "<br>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>