<?php
include 'coneccion.php'; // Asegúrate de tener la conexión a la base de datos configurada aquí
session_start();

$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

// Consulta para verificar usuario y contraseña
$sql = "SELECT * FROM USUARIOS WHERE nombre = '$nombre' AND contraseña = '$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    // Guardar datos en sesión
    $_SESSION['usuario_id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['permiso'] = $row['permiso'];
    
    // Redirigir según el permiso del usuario
    if ($row['permiso'] == 'administrador') {
        header("Location: index.php");
    } elseif ($row['permiso'] == 'vendedor') {
        header("Location: index.php");
    } else {
        echo "<p>Error en la autenticación: permiso no válido.</p>";
    }
} else {
    // Si no se encontró el usuario o la contraseña es incorrecta
    echo "<p>Error en la autenticación: nombre de usuario o contraseña incorrectos.</p>";
}

$conn->close();
?>
