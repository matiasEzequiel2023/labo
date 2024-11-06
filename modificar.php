<?php
include 'vendedor.php';


include 'header.php';
include 'sidebar.php';
include 'coneccion.php';

$message = '';

// Procesar el formulario solo si el usuario tiene permiso
if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($_SESSION['permiso'] === 'administrador' || $_SESSION['permiso'] === 'vendedor')) {
    $idmateria = $_POST['idmateria'];
    $materia = $_POST['materia'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    $sql = "UPDATE DATOS SET materia='$materia', descripcion='$descripcion', estado='$estado' WHERE idmateria='$idmateria'";

    if ($conn->query($sql) === TRUE) {
        $message = "Registro modificado con éxito";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<main>
    <section>
        <div>
            <h4>Modificar Registro</h4>
            <div class="tex">
                <form method="POST" action="">
                    <p>
                        <label for="idmateria">ID Materia:</label>
                        <input type="number" id="idmateria" name="idmateria" required>
                    </p>
                    <p>
                        <label for="materia">Materia:</label>
                        <input type="text" id="materia" name="materia" required>
                    </p>
                    <p>
                        <label for="descripcion">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" required>
                    </p>
                    <p>
                        <label for="estado">Estado:</label>
                        <input type="number" id="estado" name="estado" required>
                    </p>
                    <p>
                        <button type="submit" class="button">Modificar</button>
                    </p>
                </form>
            </div>

            <div>
                <?php if ($message): ?>
                    <div class="message <?php echo strpos($message, 'éxito') !== false ? 'success' : 'error'; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
