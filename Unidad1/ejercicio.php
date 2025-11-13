<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - PHP</title>
</head>
<body>
    <?php
        // Definición de variables del producto
        $nombreProducto = "PC Gaming Modelo X";
        $precioBase = 800.50;
        $stock = 8;
        $enOferta = true;

        echo "<h1>$nombreProducto</h1>";
        
        echo 'Precio base: $precioBase €<br>';
        
        echo "Precio base: $precioBase €<br>";

        if ($enOferta == true) {
            $precioFinal = $precioBase * 0.90;
            echo "EN OFERTA Precio final: $precioFinal €<br>";
        } else {
            $precioFinal = $precioBase;
            echo "Precio: $precioFinal €<br>";
        }

        if ($stock == 0) {
            echo "<p>Producto Agotado</p>";
        } elseif ($stock > 0 && $stock < 10) {
            echo "<p>Ultimas unidades</p>";
        } else {
            echo "<p>En stock</p>";
        }
    ?>
    
    <select name="cantidad">
        <?php
            $i = 1;
            while ($i <= $stock) {
                echo "<option value='$i'>$i</option>";
                $i++;
            }
        ?>
        
    </select>
</body>
</html>