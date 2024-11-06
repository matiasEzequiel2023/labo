<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediABM</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="content">
    <header>
        <div class="header-left">
            <?php
            // Verificar si el usuario está logueado
            if (isset($_SESSION['nombre'])) {
                // Mostrar botón de cerrar sesión si el usuario está logueado
                echo '<a href="cerrar_sesion.php" class="btn-sesion">Cerrar Sesión</a>';
            } else {
                // Mostrar botón de iniciar sesión si el usuario no está logueado
                echo '<a href="login.php" class="btn-sesion">Iniciar Sesión</a>';
            }
            ?>
        </div>
        <h1><b><a href="index.php">MediABM</a></b></h1>
    </header>
</div>
</body>
</html>

