<?php
include "../estructura/header.php";
include '../../modelo/persona.php';
include '../../control/abmPersona.php';
$abm = new abmPersona ();
 $personas= $abm->obtenerDatos(null);

if (count($personas) > 0) {
    echo "<div class='contenedorPrincipal'>
    <table class='table table-bordered'>
          <thead class='thead-dark'>
          <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>DNI</th>
          </tr>
          </thead>
          <tbody>";

    foreach ($personas as $persona) {
      
            
        echo "<tr>";
        echo "<td>" . $persona['Nombre'] . "</td>";
        echo "<td>" . $persona['Apellido'] . "</td>";
        echo "<td>" . $persona['NroDni'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo '<div class="alert alert-danger m-3 w-50" role="alert">No hay autos cargados en la base de datos.</div>';
}

echo '
    <div class="card-form">
        <form action="./error.php" method="post">
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
</div>';

?>