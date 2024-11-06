<?php
include 'config.php';


// Verificar si el usuario tiene sesión iniciada
if (!isset($_SESSION['permiso'])) {
    // Redirigir a login si no está autenticado
    header("Location: login.php");
    exit();
}

// Verificar si el usuario tiene el permiso adecuado
if ($_SESSION['permiso'] !== 'administrador' && $_SESSION['permiso'] !== 'vendedor') {
    // Mostrar mensaje de error si no tiene el permiso adecuado
    echo "<p>No tienes permiso para acceder a esta página.</p>";
    exit();
}
?>