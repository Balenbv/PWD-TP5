<?php

include_once "../estructura/header.php"; 
?>

<div class="contenedorPrincipal">
    <h2>Manejo de errores</h2>
    <div class="card-form">
        <form action="../action/accionManejo.php" method="post">
            <div class="form-group">
                <label for="nombre">Ingrese su nombre</label>
                <input type="text" name="nombre" id="nombre" class="input-text">
            </div>

            <div class="form-group">
                <label for="apellido">Ingrese su apellido</label>
                <input type="text" name="apellido" id="apellido" class="input-text">
            </div>

            <div class="form-group">
                <label for="dni">Ingrese su dni</label>
                <input type="number" name="dni" id="dni" class="input-text">
            </div>

            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
</div>

</div>
<?php
include_once "../estructura/footer.php"; 
?>
