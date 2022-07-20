<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPilotos = array();
$aPilotos[] = array(
    "name" => "Lewis Hamilton"
);
$aPilotos[] = array(
    "name" => "George Russell"
);
$aPilotos[] = array(
    "name" => "Carlos Sainz"
);
$aPilotos[] = array(
    "name" => "Charles Leclerc"
);
$aPilotos[] = array(
    "name" => "Fernando Alonso"
);
$aPilotos[] = array(
    "name" => "Esteban Ocon"
);
$aPilotos[] = array(
    "name" => "Max Verstappen"
);
$aPilotos[] = array(
    "name" => "Sergio Perez"
);
$aPilotos[] = array(
    "name" => "Lando Norris"
);
$aPilotos[] = array(
    "name" => "Daniel Ricciardo"
);
$aPilotos[] = array(
    "name" => "Valtteri Bottas"
);
$aPilotos[] = array(
    "name" => "Zhou Guanyu"
);
$aPilotos[] = array(
    "name" => "Alexander Albon"
);
$aPilotos[] = array(
    "name" => "Nicholas Latifi"
);
$aPilotos[] = array(
    "name" => "Lance Stroll"
);
$aPilotos[] = array(
    "name" => "Sebastian Vettel"
);
$aPilotos[] = array(
    "name" => "Pierre Gasly"
);
$aPilotos[] = array(
    "name" => "Yuki Tsunoda"
);
$aPilotos[] = array(
    "name" => "Michael Shumacher"
);
$aPilotos[] = array(
    "name" => "Kevin Magnussen"
);


    if (empty($_POST) == true) {
    // El formulario no ha sido enviado
} else {
    $nombre = $_REQUEST["txtNombre"];
    $pole = $_REQUEST["txtPole"];
    $posicion1 = $_REQUEST["txtPosicion"][0];
    $posicion2 = $_REQUEST["txtPosicion"][1];
    $posicion3 = $_REQUEST["txtPosicion"][2];
    $posicion4 = $_REQUEST["txtPosicion"][3];
    $posicion5 = $_REQUEST["txtPosicion"][4];
    $posicion6 = $_REQUEST["txtPosicion"][5];
    $posicion7 = $_REQUEST["txtPosicion"][6];
    $posicion8 = $_REQUEST["txtPosicion"][7];
    $posicion9 = $_REQUEST["txtPosicion"][8];
    $posicion10 = $_REQUEST["txtPosicion"][9];
    $vueltaRapida = $_REQUEST["txtVr"];
}

/* 
    echo "<p>Contenido del array asociativo con la información del formulario:</p>";
    print_r($_POST); 
} */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del formulario</title>
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-5">Resultados del formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped-columns table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Pole</th>
                            <th>Posición 1</th>
                            <th>Posición 2</th>
                            <th>Posición 3</th>
                            <th>Posición 4</th>
                            <th>Posición 5</th>
                            <th>Posición 6</th>
                            <th>Posición 7</th>
                            <th>Posición 8</th>
                            <th>Posición 9</th>
                            <th>Posición 10</th>
                            <th>Vuelta Rápida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nombre ?></td>
                            <td><?php echo $pole ?></td>
                            <td><?php echo $posicion1 ?></td>
                            <td><?php echo $posicion2 ?></td>
                            <td><?php echo $posicion3 ?></td>
                            <td><?php echo $posicion4 ?></td>
                            <td><?php echo $posicion5 ?></td>
                            <td><?php echo $posicion6 ?></td>
                            <td><?php echo $posicion7 ?></td>
                            <td><?php echo $posicion8 ?></td>
                            <td><?php echo $posicion9 ?></td>
                            <td><?php echo $posicion10 ?></td>
                            <td><?php echo $vueltaRapida ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mt-5">
                   <table class="table caption-top border  table-hover">
                        <caption>Resultado de la carrera:</caption>
                        <thead>
                            <tr>
                                <th scope="col">Posición</th>
                                <th scope="col">Piloto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">POLE</th>
                                <td><select name="txtPole" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Ganador de la pole</option>

                                        <?php foreach ($aPilotos as $piloto) { ?>
                                            <option><?php echo $piloto["name"];
                                                    $aJugadores["pole"] = "txtPole"; ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                            <?php for ($i = 0; $i < 10; $i++) {; ?>
                                <tr>
                                    <th scope="row"><?php echo "" . $i + 1; ?></th>
                                    <td><select name="txtPosicion[]" class="form-select">
                                            <option disabled selected>Elegí un piloto</option>

                                            <?php foreach ($aPilotos as $piloto) { ?>
                                                <option value="<?php echo $piloto["name"]; ?>"><?php echo $piloto["name"]; ?></option>
                                            <?php } ?>
                                        </select></td>
                                </tr><?php } ?>
                            <tr>
                                <th scope="row">Vuelta Rapida</th>
                                <td><select name="txtVr" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Vuelta mas rápida</option>

                                        <?php foreach ($aPilotos as $piloto) { ?>
                                            <option><?php echo $piloto["name"]; ?></option>
                                        <?php } ?>
                                    </select></td>
                            </tr>
                        </tbody>

                    </table>
                    <div class="d-grid gap-2">
                        <button type="submit" class="max-widht float-end mb-5 btn btn-primary">Listo</button>
                    </div>
               
            </div>
            <div class="col-8 mt-5 text-center p-5">
                <h2>Puntos</h2>
                

            </div>
        </div>
    </main>
</body>

</html>