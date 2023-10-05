<!DOCTYPE html>
<html>
<head>
    <title>Calcular Sueldo</title>
</head>
<body>
    <h1>Calculadora de Sueldo </h1>
    <form method="post" action="">
        <label for="ImporteTotal">Importe total vendido del mes:</label>
        <input type="text" name="ImporteTotal" required><br>

        <label for="HijosEscolar">Cantidad de hijos en edad escolar:</label>
        <input type="text" name="HijosEscolar" required><br>

        <input type="submit" value="Calcular Sueldo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $ImporteTotal = floatval($_POST["ImporteTotal"]);
        $HijosEscolar = intval($_POST["HijosEscolar"]);

        
        $SueldoNeto = 600;
        $Comision = 7.5;
        $BonoHijo = 50;
        $Descuento = 11;

        
        $comision = ($Comision / 100) * $ImporteTotal;

        
        $bonificacion = $BonoHijo * $HijosEscolar;

        
        $sueldo_bruto = $SueldoNeto + $comision + $bonificacion;

        
        $descuento = ($Descuento / 100) * $sueldo_bruto;

        
        $sueldo_neto = $sueldo_bruto - $descuento;

        
        echo "<h2>Resultados:</h2>";
        echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
        echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
        echo "Sueldo Bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Sueldo Neto: S/. " . number_format($sueldo_neto, 2) . "<br>";
    }
    ?>
</body>
</html>

