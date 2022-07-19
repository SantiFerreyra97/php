<?php 

function promediar($aNumeros){
    return array_sum($aNumeros) / count($aNumeros);
    }


$aNotas = array(8, 4, 5, 3, 9, 1);
$aSueldos = array(500, 550, 800, 900, 1700);
echo "El promedio es:" . promediar($aNotas) . "<br>";
echo "El promedio es:" . promediar($aSueldos) . "<br>";

function maximo($aNumeros){
    $maximo=0;
    foreach($aNumeros as $numero){            
        if($maximo < $numero){
            $maximo = $numero;
        }                
    } 
    return $maximo; 
}
echo "El numero Maximo es:" . maximo($aSueldos). "<br>";

?>

