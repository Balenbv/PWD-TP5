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

    <div class="grid-container">

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
                    <button onclick="moverA(1)" class="flex-btn">Ver Error</button>
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
                    <button onclick="moverA(2)" class="flex-btn"> Ver Error </button>
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
                    <button onclick="moverA(3)" class="flex-btn">Ver Error</button>
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
                
                <div class="container-btn mt-5">
                    <button onclick="moverA(4)" class="flex-btn">Ver Error</button>
                </div>
            
        </div>
        <div class="item-grid">
            <h2>Error 5</h2>
                <h2>Error de Notificacion</h2>
                <code>
                    <pre>
echo $variable_no_definida;
                    </pre>
                </code>
                
                <div class="container-btn mt-5 pt-3">
                    <button onclick="moverA(5)" class="flex-btn">Ver Error</button>
                </div>

        </div>

        <div class="item-grid">
            <h2>Error 6</h2>
                <h2>Error de Usuario</h2>
                <code>
                    <pre>
trigger_error("Esto es un error de usuario",E_USER_NOTICE);
                    </pre>
                </code>

                <div class="container-btn mt-5">
                    <button onclick="moverA(6)" class="flex-btn">Ver Error</button>
                </div>

        </div>
    </div>
</div>

<script>
    function moverA(error){
    window.location.href = "http://localhost/PWD-TP5/src/vista/action/error.php?error=" + error;
    }
</script>

<?php include_once "../estructura/footer.php";  ?>