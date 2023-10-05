<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Gaseosas</title>
</head>
<body>
    <h1>Calculadora de Gaseosas</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precioGaseosa = floatval($_POST["precioGaseosa"]);
        $cantidadUnidades = intval($_POST["cantidadUnidades"]);
        $nuevoPrecio = $precioGaseosa * 0.95;   
        $importeCompra = $nuevoPrecio * 3 * $cantidadUnidades;  
        $importeDescuento = $importeCompra * 0.07;   
        $importePagar = $importeCompra - $importeDescuento;
        $obsequio = 2 * $cantidadUnidades;
        
        echo "<h2>Resultados:</h2>";
        echo "<p>Nuevo precio de la gaseosa: S/. " . number_format($nuevoPrecio, 2) . " por litro</p>";
        echo "<p>Importe de la compra: S/. " . number_format($importeCompra, 2) . "</p>";
        echo "<p>Importe del descuento: S/. " . number_format($importeDescuento, 2) . "</p>";
        echo "<p>Importe a pagar: S/. " . number_format($importePagar, 2) . "</p>";
        echo "<p>Obsequio: " . $obsequio . " caramelos</p>";
    }
    ?>
    
    <form method="post" action="">
        <label for="precioGaseosa">Precio actual de la gaseosa (por litro):</label>
        <input type="text" name="precioGaseosa" required><br>

        <label for="cantidadUnidades">Cantidad de unidades adquiridas:</label>
        <input type="text" name="cantidadUnidades" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
