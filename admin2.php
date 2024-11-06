<?php
include 'header.php';
include 'sidebar.php'; 
include 'coneccion.php';

$sql = "SELECT * FROM USUARIOS";
$result = $conn->query($sql);
?>

<link rel="stylesheet" href="css/switch.css">



<main>

<section>

<h1>Listar Usuarios</h1>
<br>                  
 <div class="tex">
 
 <?php
    if ($result->num_rows > 0) {
        echo "<table clase='table'>";
        echo "<thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>Permiso</th>
                
            </tr>
        </thead>
        <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["id"]. "</td>
            <td>" . $row["nombre"]. "</td>
            <td>" . $row["contraseña"]. "</td>
            <td>" . $row["permiso"]. "</td>
            
            </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>0 resultados</p>";
    }
    $conn->close();
    ?>
<div class="text-center">
    <a class="btn btn-danger" href="cerrar_sesion.php">Cerrar Sesion</a>
    <!----editar--->
</div>

</div>


</section>

</main>






<?php include 'footer.php'; ?>