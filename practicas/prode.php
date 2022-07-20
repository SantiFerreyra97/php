<?php
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

$aJugadores = array();
$aJugadores[] = array(
    "nombre" => "Facu",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Matu",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Juani",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Cabe",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Lore",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Brarda",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Pepe",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);
$aJugadores[] = array(
    "nombre" => "Tin",
    "pole" => "",
    "position1" => "",
    "position2" => "",
    "position3" => "",
    "position4" => "",
    "position5" => "",
    "position6" => "",
    "position7" => "",
    "position8" => "",
    "position9" => "",
    "position10" => "",
    "vueltaRapida" => "",

);

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
            <div class="col-4 bg-light mt-5">
                <form action="resultado_prode.php" method="POST">
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

                            <select  name="txtPosicion[]" class="form-select" >
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
                    <div class="my-5 py-2">
                        <button type="submit" class="float-end btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <h1 class="float-end mt-5 p-4 bg-light rounded-pill position-fixed start-50">PRODE FORMULA 1</h1>
                <img src="descarga.png" alt="" class="w-25 position-fixed top-50 start-50">
            </div>
        </div>



    </main>

</body>

</html>

<!-- 

No puedo enviar los resultados de todas las options de las posiciones y no se ve la imagen

 -->