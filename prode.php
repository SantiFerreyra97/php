<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aPosiciones = array();
$aPosiciones[] = array(
    "nombre" => "Posiciones:",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);

$aPlayers = array();
$aPlayers[] = array(
    "nombre" => "Pepe",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Brarda",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Lore",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Matu",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Cabe",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Facu",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Tin",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);
$aPlayers[] = array(
    "nombre" => "Juani",
    "POLE" => "Lewis Hamilton",
    "P1" => "Lewis Hamilton",
    "P2" => "Lewis Hamilton",
    "P3" => "Lewis Hamilton",
    "P4" => "Lewis Hamilton",
    "P5" => "Lewis Hamilton",
    "P6" => "Lewis Hamilton",
    "P7" => "Lewis Hamilton",
    "P8" => "Lewis Hamilton",
    "P9" => "Lewis Hamilton",
    "P10" => "Lewis Hamilton",
    "Vuelta Rapida" => "Lewis Hamilton"
);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prode F1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text center">
                <h1>Prode Formula 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Pole</th>
                        <th>Posicion 1</th>
                        <th>Posicion 2</th>
                        <th>Posicion 3</th>
                        <th>Posicion 4</th>
                        <th>Posicion 5</th>
                        <th>Posicion 6</th>
                        <th>Posicion 7</th>
                        <th>Posicion 8</th>
                        <th>Posicion 9</th>
                        <th>Posicion 10</th>
                        <th>Vuelta Rapida</th>
                                                
                    </tr>
                    <?php

                    for ($contador = 0; $contador < count($aPlayers); $contador++) { ?>
                        <tr>
                            <td><?php echo $aPlayers[$contador]["nombre"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["POLE"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P1"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P2"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P3"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P4"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P5"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P6"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P7"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P8"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P9"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["P10"]; ?></td>
                            <td><?php echo $aPlayers[$contador]["Vuelta Rapida"]; ?></td>
                                                       
                        </tr>
                    <?php

                    } ?>
                    <?php

                    for ($contador = 0; $contador < count($aPosiciones); $contador++) { ?>
                        <tr>
                            <td><?php echo $aPosiciones[$contador]["nombre"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["POLE"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P1"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P2"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P3"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P4"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P5"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P6"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P7"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P8"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P9"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["P10"]; ?></td>
                            <td><?php echo $aPosiciones[$contador]["Vuelta Rapida"]; ?></td>
                        </tr>
                    <?php
                    } ?>
                </table>
            </div>
        </div>

    </div>

</body>
</hmtl>