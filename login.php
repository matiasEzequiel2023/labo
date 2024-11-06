<?php
include 'header.php';
include 'sidebar.php';
include 'coneccion.php';
?>


<main>

    <section>
        <div>
            <h4>Iniciar Sesión</h4>
            <div class="tex">

                <form action="validar_login.php" method="POST">
                    <p>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </p>

                    <p>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" id="contraseña" name="contraseña" required>
                    </p>
                  
                    <p>
                        <button type="submit" class="button">Ingresar</button>
                    </p>
            </div>
            </form>


        </div>
        </div>



    </section>
</main>
<?php include 'footer.php'; ?>