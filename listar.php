<?php
include 'vendedor.php';


include 'header.php';
include 'sidebar.php'; 
include 'coneccion.php';

$sql = "SELECT * FROM DATOS";
$result = $conn->query($sql);
 
?>
 <main>

<section>
<div>
<h1>Listar Registros</h1>
<br>                  
<b><a href="agregar.php" class="button"> AGREGAR NUEVO</a></b>
 <div class="tex">
 
 <?php
    if ($result->num_rows > 0) {
        echo "<table clase='table'>";
        echo "<thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["idmateria"]. "</td><td>" . $row["materia"]. "</td><td>" . $row["descripcion"]. "</td><td>" . $row["estado"]. "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>0 resultados</p>";
    }
    $conn->close();
    ?>


</div>


</div>




</section>
</main>

<?php include 'footer.php'; ?>
