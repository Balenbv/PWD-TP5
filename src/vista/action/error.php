<?php

include '../estructura/header.php';
include '../../../config.php';

include '../../control/abmPersona.php';




$error = $_GET['error'] ?? null; // Para los errores 1 a 5
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = $_POST['error'] ?? null; // Para el error 6
}

switch ($error){
    case '1':

        function division($a, $b){
            return $a / $b;
        }

        $a = 10;
        $b = 0;

        division($a, $b);

        break;
    case '2':

        eval('echo "Esto es un error de parseo;');

        break;
    case '3':

        $array = [1, 2, 3];
        echo $array[5];

        break;
    case '4':

        throw new Exception("Esto es una excepción no capturada");

        break;
    case '5':

        echo $variable_no_definida;

        break;
    case '6':

        $abm = new abmPersona();
        $datos = data_submitted();
        $abm->alta($datos);
        
        echo "<div class='contenedorPrincipal'>
                    <div class='card-form-correcto'> 
                    Datos cargados correctamente.
                    </div>
             </div>";

        break;
    default:
        echo "Error no encontrado";
        break;
}
?>

<?php include_once '../estructura/footer.php'; ?>