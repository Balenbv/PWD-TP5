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
    <h1>Manejo de errores por Whoops</h1>


    <h2>Error 1:</h2>
        <h3>Error Fatal</h3>
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
    <button onclick="moverA(1)">Ver Error</button>

    <h2>Error 2</h2>
        <h3>Error de Parseo</h3>
        <code>
            <pre>
            eval('echo "Esto es un error de parseo;');
            </pre>
        </code>
    <button onclick="moverA(2)"> Ver Error </button>

    <h2>Error 3</h2>
        <h3>Error de tiempo de Ejecucion</h3>
        <code>
            <pre>
            $array = [1, 2, 3];
            echo $array[5];
            </pre>
        </code>
    <button onclick="moverA(3)">Ver Error</button>

    <h2>Error 4</h2>
        <h3>Excepcion no capturada</h3>
        <code>
            <pre>
            throw new Exception("Esto es una excepción no capturada");
            </pre>
        </code>
    <button onclick="moverA(4)">Ver Error</button>

    <h2>Error 5</h2>
        <h3>Error de Notificacion</h3>
        <code>
            <pre>
            echo $variable_no_definida;
            </pre>
        </code>
    <button onclick="moverA(5)">Ver Error</button>
    
    <h2>Error 6</h2>
        <h3>Error de Usuario</h3>
        <code>
            <pre>
            trigger_error("Esto es un error de usuario", E_USER_NOTICE);
            </pre>
        </code>
    <button onclick="moverA(6)">Ver Error</button>
</div>

<script>
    function moverA(error){
    window.location.href = "http://localhost/PWD-TP5/src/vista/action/error.php?error=" + error;
    }
</script>

<?php
include_once "../estructura/footer.php"; 
?>