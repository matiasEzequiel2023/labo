<?php
include 'admin.php';


include 'header.php';
include 'sidebar.php';
include 'coneccion.php';



$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $materia = $_POST['materia'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO DATOS (materia, descripcion, estado) VALUES ('$materia', '$descripcion', '$estado')";

    if ($conn->query($sql) === TRUE) {
        $message = "Nuevo registro creado con éxito";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<main>
    <section>

        <div>
            <h4>Agregar Nuevo</h4>
            <div class="tex">

                <form method="POST" action="">
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
                    <button type="submit" class="button">Agregar</button>
                    </p>
            </div>
            </form>
            <div>

                <?php if ($message): ?>
                    <div class="message <?php echo strpos($message, 'éxito') !== false ? 'success' : 'error'; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

            </div>


        </div>
        </div>










    </section>
</main>
<?php include 'footer.php'; ?>