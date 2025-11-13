<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta perfil dinamica</title>
</head>
<body>
    <?php
        $nombre = "Jhonaider Viera";
        $edad = 22;
        $profesion = "Estudiante de Daw";
        $tieneGithub = true;
        $githubUrl = "https://github.com/jhonaiderviera";
    ?>
    <h1>Perfil de <?php echo $nombre; ?></h1>
    <h2>Profesion <?php echo $profesion; ?></h2>
    <p>Edad: <?php echo $edad; ?> años</p>
    <?php
        if ($tieneGithub) {
            echo "<p>GitHub: <a href='$githubUrl'>$githubUrl</a></p>";
        } else {
            echo "<p>No tiene cuenta de GitHub.</p>";
        }

    ?>


</body>
</html>