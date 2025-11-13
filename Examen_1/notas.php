<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor - Jhonaider Viera</title>
</head>
<body>
    
    <?php
    // Definir los datos del alumno
    $nombre_alumno = "Jhonaider Viera";

    $modulo = "Desarrollo Web en Entorno Servidor";

    $nota_media = 7.5;

    $es_matriculado = true;

    //Imprimir los datos del alumno
    echo "<h1>$nombre_alumno</h1>";
    echo "<h2>$modulo</h2>";
    echo 'Mi nota media actual es $nota_media<br>';
    echo "Mi nota media actual es $nota_media<br>";

    // Calculo de las notas y estado de matricula
    if ($nota_media >= 9) {
        echo "Sobresaliente <br>";
    } elseif ($nota_media >= 7 && $nota_media < 9) {
        echo "Notable <br>";
    } elseif ($nota_media >= 5 && $nota_media < 7) {
        echo "Aprobado <br>";
    } else {
        echo "Suspenso <br>";
    }

    if ($es_matriculado == true ){
        echo "Estado: Alumno Matriculado <br>";
    } else {
        echo "ERROR: Alumno no matriculado <br>";
    }

    echo "<table border='1'>";
    echo "<tr><td>Fila numero</td><td>Numero</td></tr>";
    
    $i = 1;
    
    while ($i <= 5) {
        echo "<tr>";
        echo "<td>Fila numero</td>";
        echo "<td>$i</td>";
        echo "</tr>";
        $i++;
    }
    
    echo "</table>";
    ?>
    
</body>
</html>