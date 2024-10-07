<?php
include '../estructura/header.php';
// require '../../utils/utils.php'; EL spl_autoload_register NOS TRAE UN ERROR RARO QUE NO SABEMOS MANEJAR...
include '../../modelo/persona.php';
include '../../control/abmPersona.php';

function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
}

$datos = data_submitted();

?>
<div class="card-form">
    <?php
    $abm = new abmPersona();
    $abm->buscar($datos);
    $abm->alta($datos);
    print_r($datos);
    ?>
</div> 