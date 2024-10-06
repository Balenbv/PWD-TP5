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

$abm->buscar($datos);
$abm->alta($datos);
?>

<div class="contenedorPrincipal">
    <div class="card-form card-special">
        <h1 class="IngresoCorrecto">Se ingreso correctamente su usuario!!</h1>
    </div>
</div>

<?php
include_once "../estructura/footer.php"; 
?>