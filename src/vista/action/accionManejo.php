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
    <a href="errorFatal.php"><button>Ver Error</button></a>

    <h2>Error 2</h2>
        <h3>Error de Parseo</h3>
        <code>
            <pre>
            eval('echo "Esto es un error de parseo;');
            </pre>
        </code>
    <a href="ErrorParseo.php"><button> Ver Error </button></a>

    
    <h2>Error 3</h2>
        <h3>Error de tiempo de Ejecucion</h3>
        <code>
            <pre>
            $array = [1, 2, 3];
            echo $array[5];
            </pre>
        </code>
    <a href="errorTiempoDeEjecucion.php"><button>Ver Error</button></a>

    <h2>Error 4</h2>
        <h3>Excepcion no capturada</h3>
        <code>
            <pre>
            throw new Exception("Esto es una excepción no capturada");
            </pre>
        </code>
    <a href="errorExcepcion.php"><button>Ver Error</button></a>

    <h2>Error 5</h2>
        <h3>Error de Notificacion</h3>
        <code>
            <pre>
            echo $variable_no_definida;
            </pre>
        </code>
    <a href="errorDeNotificacion.php"><button>Ver Error</button></a>
    
    <h2>Error 6</h2>
        <h3>Error de Usuario</h3>
        <code>
            <pre>
            trigger_error("Esto es un error de usuario", E_USER_NOTICE);
            </pre>
        </code>
    <a href="errorUsuario.php"><button>Ver Error</button></a>


    <div class="card-form">
        <?php
        // $abm->buscar($datos);
        // $abm->alta($datos);
        print_r($datos);
        ?>
    </div>
</div>

<?php
include_once "../estructura/footer.php"; 
?>