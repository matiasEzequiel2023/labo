<?php
include 'admin.php';


include 'header.php';
include 'sidebar.php'; 
include 'coneccion.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idmateria = $_POST['idmateria'];

    $sql = "DELETE FROM DATOS WHERE idmateria='$idmateria'";

    if ($conn->query($sql) === TRUE) {
        $message = "Registro borrado con éxito";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

<main>

<section>

<h4>Borrar Registro</h4>

<div class="tex">

        <form method="POST" action="">
          <p>
            <label for="idmateria">ID Materia:</label>
            <input type="number" id="idmateria" name="idmateria" required>
          </p>
          <p>
          <button type="submit" class="button">Borrar</button></p>
      </div>
      </form>





<div>

<?php if ($message): ?>
  <div class="message <?php echo strpos($message, 'éxito') !== false ? 'success' : 'error'; ?>">
    <?php echo $message; ?>
  </div>
<?php endif; ?>

</div>

</section>
</main>

<?php include 'footer.php'; ?>