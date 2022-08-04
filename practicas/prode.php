<?php



$aPilotos = array();
$aPilotos[] = array(
    "name" => "Hamilton"
);
$aPilotos[] = array(
    "name" => "Russell"
);
$aPilotos[] = array(
    "name" => "Sainz"
);
$aPilotos[] = array(
    "name" => "Leclerc"
);
$aPilotos[] = array(
    "name" => "Alonso"
);
$aPilotos[] = array(
    "name" => "Ocon"
);
$aPilotos[] = array(
    "name" => "Verstappen"
);
$aPilotos[] = array(
    "name" => "Perez"
);
$aPilotos[] = array(
    "name" => "Norris"
);
$aPilotos[] = array(
    "name" => "Ricciardo"
);
$aPilotos[] = array(
    "name" => " Bottas"
);
$aPilotos[] = array(
    "name" => "Zhou"
);
$aPilotos[] = array(
    "name" => "Albon"
);
$aPilotos[] = array(
    "name" => "Latifi"
);
$aPilotos[] = array(
    "name" => "Stroll"
);
$aPilotos[] = array(
    "name" => "Vettel"
);
$aPilotos[] = array(
    "name" => "Gasly"
);
$aPilotos[] = array(
    "name" => "Tsunoda"
);
$aPilotos[] = array(
    "name" => "Shumacher"
);
$aPilotos[] = array(
    "name" => "Magnussen"
);


$aJugadores = array();

$aJugadores[] = array(
    "nombre" => "Facu"
);
$aJugadores[] = array(
    "nombre" => "Matu"
);
$aJugadores[] = array(
    "nombre" => "Juani"
);
$aJugadores[] = array(
    "nombre" => "Cabe"

);
$aJugadores[] = array(
    "nombre" => "Lore"
);
$aJugadores[] = array(
    "nombre" => "Brarda"

);
$aJugadores[] = array(
    "nombre" => "Pepe"
);
$aJugadores[] = array(
    "nombre" => "Tin"
);
session_start();

if (isset($_SESSION["resultadoProde"])) {
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aResultados = $_SESSION["resultadoProde"];
} else {
    $aResultados = array();
};

if ($_POST) {
    //Asignamos en variables los datos que vienen del formulario


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

    //creamos un array que contendrá el listado de clientes
    $aResultados[] = array(
        "nombre" => "<b>$nombre</b>",
        "pole" => $pole,
        "posicion1" => $posicion1,
        "posicion2" => $posicion2,
        "posicion3" => $posicion3,
        "posicion4" => $posicion4,
        "posicion5" => $posicion5,
        "posicion6" => $posicion6,
        "posicion7" => $posicion7,
        "posicion8" => $posicion8,
        "posicion9" => $posicion9,
        "posicion10" => $posicion10,
        "vueltaRapida" => $vueltaRapida
    );

    $_SESSION["resultadoProde"] = $aResultados;
};
$aPosiciones= array();
$aPosiciones[]= array(
    "poleman" => $aPilotos[0],
    "p1" => $aPilotos[1],
    "p2" => $aPilotos[2],
    "p3" => $aPilotos[3],
    "p4" => $aPilotos[4],
    "p5" => $aPilotos[5],
    "p6" => $aPilotos[6],
    "p7" => $aPilotos[9],
    "p8" => $aPilotos[2],
    "p9" => $aPilotos[2],
    "p10" => $aPilotos[1],
    "vueltaRapi" => $aPilotos[2]
    )


/* Resumir pilotos y nombres unidad 3 diapositiva 62 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Prode</title>
</head>

<body>
    <main class="container py-2">

        <div class="row">
            <div class="col-2 bg-light mt-5">
                <form method="POST">
                    <div class="mt-2 pb-2">
                        <label for="">Nombre</label>
                        <select name="txtNombre" class="form-select" aria-label="Default select example py-3">
                            <option disabled selected>Quién sos?</option>

                            <?php foreach ($aJugadores as $jugador) { ?>
                                <option><?php echo $jugador["nombre"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="py-2">
                        <label for="">POLE: </label>
                        <select name="txtPole" class="form-select" aria-label="Default select example">
                            <option disabled selected>Elegí el POLEMAN</option>

                            <?php foreach ($aPilotos as $piloto) { ?>
                                <option><?php echo $piloto["name"];
                                        $aJugadores["pole"] = "txtPole"; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php for ($i = 0; $i < 10; $i++) {; ?> <div class="py-2">
                            <label for=""><?php echo "Posición " . $i + 1; ?>
                            </label>

                            <select name="txtPosicion[]" class="form-select">
                                <option disabled selected>Elegí un piloto</option>
                                <?php foreach ($aPilotos as $piloto) { ?>
                                    <option value="<?php echo $piloto["name"]; ?>"><?php echo $piloto["name"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>
                    <div class="py-2">
                        <label for="">Vuelta Rápida: </label>
                        <select name="txtVr" class="form-select" aria-label="Default select example">
                            <option disabled selected>Elegí quien hace VR</option>

                            <?php foreach ($aPilotos as $piloto) { ?>
                                <option><?php echo $piloto["name"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class=" py-2">
                        <button type="submit" class="max-widht float-end mb-5 btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>


            <div class="col-10 px-5 text-center ">
                <div Class="p-2 text-center  ">
                    <h1 class="py-5">Resultados</h1>
                </div>
                <table class="table table-hover border shadow ">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Pole</th>
                            <th> 1</th>
                            <th> 2</th>
                            <th> 3</th>
                            <th> 4</th>
                            <th> 5</th>
                            <th> 6</th>
                            <th> 7</th>
                            <th> 8</th>
                            <th> 9</th>
                            <th> 10</th>
                            <th>Vuelta Rápida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aResultados as $resultado) { ?>
                            <tr>
                                <td><?php echo $resultado["nombre"] ?></td>
                                <td><?php echo $resultado["pole"] ?></td>
                                <td><?php echo $resultado["posicion1"] ?></td>
                                <td><?php echo $resultado["posicion2"] ?></td>
                                <td><?php echo $resultado["posicion3"] ?></td>
                                <td><?php echo $resultado["posicion4"] ?></td>
                                <td><?php echo $resultado["posicion5"] ?></td>
                                <td><?php echo $resultado["posicion6"] ?></td>
                                <td><?php echo $resultado["posicion7"] ?></td>
                                <td><?php echo $resultado["posicion8"] ?></td>
                                <td><?php echo $resultado["posicion9"] ?></td>
                                <td><?php echo $resultado["posicion10"] ?></td>
                                <td><?php echo $resultado["vueltaRapida"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        </div>
    </main>

</body>

</html>

