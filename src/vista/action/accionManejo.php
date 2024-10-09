<?php
require '../../../config.php';
require '../../../vendor/autoload.php';
include '../estructura/header.php';

$datos = data_submitted();
$abm = new abmPersona();

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();
?>

<div class="contenedorPrincipal">

    <div class="container tex-center"><h1>Manejo de errores por Whoops</h1></div>

    <div class="grid-container text-center">

        <div class="item-grid">
            <h2>Error 1:</h2>
                <h2>Error Fatal</h2>
                <code>
                    <pre>
$a = 10;
$b = 0;
function division($a, $b){
    return $a / $b;
}
division($a, $b);
                    </pre>
                </code>
                
                <div class="container-btn">
                    <button onclick="moverA('1')" class="flex-btn">Ver Error</button>
                </div>
        </div>
        
        <div class="item-grid">
            <h2>Error 2</h2>
                <h2>Error de Parseo</h2>
                <code>
                    <pre>
eval('echo "Esto es un error de parseo;');
                    </pre>
                </code> 
                
                <div class="container-btn btn-2">
                    <button onclick="moverA('2')" class="flex-btn"> Ver Error </button>
                </div>
            
        </div>

        <div class="item-grid">
            <h2>Error 3</h2>
                <h2>Error de tiempo de Ejecucion</h2>
                <code>
                    <pre>
$array = [1, 2, 3];
echo $array[5];
                    </pre>
                </code>
                
                <div class="container-btn btn-3">
                    <button onclick="moverA('3')" class="flex-btn">Ver Error</button>
                </div>
            
        </div>

        <div class="item-grid">
            <h2>Error 4</h2>
                <h2>Excepcion no capturada</h2>
                <code>
                    <pre>
throw new Exception("Esto es una excepción no capturada");
                    </pre>
                </code>
                
                <div class="container-btn mt-5 pt-4">
                    <button onclick="moverA('4')" class="flex-btn">Ver Error</button>
                </div>
            
        </div>
        <div class="item-grid box-grid-alone">
            <h2>Error 5</h2>
                <h2>Error de Notificacion</h2>
                <code>
                    <pre>
echo $variable_no_definida;
                    </pre>
                </code>
                
                <div class="container-btn mt-5 pt-3">
                    <button onclick="moverA('5')" class="flex-btn">Ver Error</button>
                </div>

        </div>

        <div class="item-grid box-informacionPersona-grid">
            <h2>Error 6</h2> 
                <h2 style="margin-bottom: 3%;">Error de Usuario</h2>
                <?php
                $personas= $abm->obtenerDatos(null);

                if (count($personas) > 0) {
                    echo "<div class='contenedorPrincipal-special'>
                    <table class='table-persona'>
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

         <input type="hidden" name="error" value="6">
         <button type="submit" class="flex-btn">Ver Error</button>
        </form>
    </div>
</div>';
                ?>

                <div class="container-btn mt-5">
                    
                </div>

        </div>
    </div>
</div>

<script>
    function moverA(error){
       // alert(error);
    window.location.href = "http://localhost/PWD-TP5/src/vista/action/error.php?error=" + error;
    }
</script>

<?php include_once "../estructura/footer.php";  ?>