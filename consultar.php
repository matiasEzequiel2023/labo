<?php
include 'vendedor.php';


include 'header.php';
include 'sidebar.php'; 
include 'coneccion.php';

$idmateria = isset($_GET['idmateria']) ? $_GET['idmateria'] : null;

$resultadoString = ""; 

if ($idmateria !== null) {
  $sql = "SELECT * FROM DATOS WHERE idmateria='$idmateria'";
  $resultado = $conn->query($sql);

  if ($resultado->num_rows > 0) {
    $resultadoString = "<h3>Resultado:</h3><ul>";
    while ($row = $resultado->fetch_assoc()) {
      $resultadoString .= "<li>ID: " . $row["idmateria"] . "<br>Materia: " . $row["materia"] . "<br>Descripción: " . $row["descripcion"] . "<br>Estado: " . $row["estado"] . "</li>";
    }
    $resultadoString .= "</ul>";
  } else {
    $resultadoString = "<br> <br><br>       No se encontro tu busquedad, prueba con otro";
  }
}

$conn->close();
?>

<main>

<section>


   <h4>Consultar Registro</h4>
      <div class="tex">

        <form method="GET" action="">
          <p>
            <label for="idmateria">ID Materia:</label>
            <input type="number" id="idmateria" name="idmateria" required>
          </p>
          <p>
          <button type="submit" class="button">Consultar</button></p>
      </div>
      </form>



<?php

if (!empty($resultadoString)) {
  echo $resultadoString;
}
?>


</section>
</main>



<?php include 'footer.php'; ?>