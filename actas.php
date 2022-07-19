<?php 
function promediar($aNumeros)
{
    return array_sum($aNumeros) / count($aNumeros);
}

$aAlumnos = array();
$aAlumnos[]= array("nombre" => "Ana Valle", "notas" => array(7, 8, 8, 10, 5, 6));
$aAlumnos[]= array("nombre" => "Bernabe Paz", "notas" => array(8,4, 8, 10, 5, 6));
$aAlumnos[]= array("nombre" => "Sebastian Aguitte", "notas" => array(8, 5,8, 10, 5, 6));
$aAlumnos[]= array("nombre" => "Monica Ledesma", "notas" => array(3, 8,8, 10, 5, 6));
$aAlumnos[]= array("nombre" => "Monica Ledesma", "notas" => array(3, 8,8, 10, 5, 6));


/* $aNotas = array(8, 4, 5, 3, 9, 1); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>ACTAS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Nota 3</th>
                            <th>Nota 4</th>
                            <th>Nota 5</th>
                            <th>Nota 6</th>
                            <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aAlumnos as $alumno){?>
                        <tr>
                            <td><?php echo $alumno["nombre"]?></td>
                            <td><?php echo $alumno["notas"][0]?></td>
                            <td><?php echo $alumno["notas"][1]?></td>
                            <td><?php echo $alumno["notas"][2]?></td>
                            <td><?php echo $alumno["notas"][3]?></td>
                            <td><?php echo $alumno["notas"][4]?></td>
                            <td><?php echo $alumno["notas"][5]?></td>
                            <td><?php echo number_format(promediar($alumno["notas"]), 2,  ",", "."); ?></td>
                        </tr>   
                        <?php
                    } ?>
                    </tbody>
                </table>
                <?php echo "El promedio de todo el curso es: ". number_format(promediar($alumno["notas"]), 2,  ",", ".");?>
            </div>
        </div>
    </main>
</body>

</html>