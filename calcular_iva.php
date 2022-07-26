<?php
$iva = 21;
$precioConIva = 0;
$precioSinIva = 0;

if ($_POST) {
    $iva = $_POST["lstIva"];
    $precioConIva = ($_POST["txtPrecioConIva"]) > 0? $_POST["txtPrecioConIva"] : 0;
    $precioSinIva = ($_POST["txtPrecioSinIva"]) > 0? $_POST["txtPrecioSinIva"]: 0;
   
   if ($precioSinIva > 0) {
    $precioConIva = $precioSinIva * ($iva/100+1);
   }
   if ($precioConIva > 0) {
    $precioSinIva = $precioConIva / ($iva/100+1);
   }
   
   
    $ivaCantidad = $precioConIva - $precioSinIva;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compat  ible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular iva</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST">
                    <div class="pb-3">
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva">
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21 " selected>21</option>
                            <option value="27">27</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <label for="">Precio sin IVA: </label>
                        <input type="text" id="txtPrecioSinIva" name="txtPrecioSinIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label for="">Precio con IVA: </label>
                        <input type="text" id="txtPrecioConIva" name="txtPrecioConIva" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>
                </form>
            </div>
            <div class="col-5 pt-4">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva ?>%</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td>$<?php echo number_format($precioSinIva, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td>$<?php echo number_format( $precioConIva, 2, ",", "."); ?></td>
                    </tr>
                    <tr>
                        <th>IVA cantidad</th>
                        <td>$<?php echo number_format($ivaCantidad, 2, ",", ".");?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>

</html>