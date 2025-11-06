<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <h1> Lista de Módulos Actualizada </h1>
    <?php
$modulos = [
    "Matematica", 
    "Lengua", 
    "Historia", 
    "Biologia", 
    "Quimica"
];

$modulos[2] = "Ingles";

$modulos[] = "Educacion Fisica";

print_r($modulos);
?>
</body>
</html>