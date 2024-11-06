<?php

include 'config.php';

// Verificar si la clave 'permiso' está definida en $_SESSION
if (isset($_SESSION['permiso'])) {
    $permiso = $_SESSION['permiso'];
} else {
    // Si no está definida, podemos asignar un valor por defecto o redirigir al login
    $permiso = 'invitado'; // o puedes redirigir a una página de login
}
?>

<aside>
    <nav class="menu">
        <h4>MENU</h4>
        <?php
        // Mostrar el menú según el rol del usuario
        if ($permiso == 'administrador') {
            // Mostrar todas las opciones para el administrador
            echo '<b><a href="agregar.php" class="menu-item">Agregar Registro</a></b>';
            echo '<b><a href="modificar.php" class="menu-item">Modificar Registro</a></b>';
            echo '<b><a href="consultar.php" class="menu-item">Consultar Registro</a></b>';
            echo '<b><a href="borrar.php" class="menu-item">Borrar Registro</a></b>';
            echo '<b><a href="listar.php" class="menu-item">Listar Registros</a></b>';
        } elseif ($permiso == 'vendedor') {
            // Mostrar solo las opciones permitidas para el vendedor
            echo '<b><a href="modificar.php" class="menu-item">Modificar Registro</a></b>';
            echo '<b><a href="consultar.php" class="menu-item">Consultar Registro</a></b>';
            echo '<b><a href="listar.php" class="menu-item">Listar Registros</a></b>';
        } else {
            // Opcionalmente, puedes mostrar un mensaje o redirigir si es un usuario no autorizado
            echo '<p>No tienes permiso para ver este contenido.</p>';
        }
        ?>
    </nav>

    <p>
       <b>MediABM</b><br>Empresa de Medicamentos
    </p>
</aside>