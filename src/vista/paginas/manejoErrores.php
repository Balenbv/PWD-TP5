<?php

include_once "../estructura/header.php"; 
?>

<div class="contenedorPrincipal">

<div class="container-card-flex">
    <div class="card-form">
        <h1>IDEAS</h1>
        <input type="text" name="" id="">
        <input type="text" name="" id="">
        <input type="text" name="" id="">
        <input type="text" name="" id="">
    </div>
    <div class="card-form">
        <form action="../action/accionManejo.php" method="post">
            <div class="form-group">
                <label for="nombre">Ingrese su nombre</label>
                <input type="text" name="Nombre" id="nombre" class="input-text">
            </div>

            <div class="form-group">
                <label for="apellido">Ingrese su apellido</label>
                <input type="text" name="Apellido" id="apellido" class="input-text">
            </div>

            <div class="form-group">
                <label for="dni">Ingrese su dni</label>
                <input type="number" name="NroDni" id="dni" class="input-text">
            </div>

            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
    <div class="card-form">
        <h1>IDEAS</h1>
        <input type="text" name="" id="">
        <input type="text" name="" id="">
        <input type="text" name="" id="">
        <input type="text" name="" id="">
    </div>
</div>


</div>
<?php
include_once "../estructura/footer.php"; 
?>
