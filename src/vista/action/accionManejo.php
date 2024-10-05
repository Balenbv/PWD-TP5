<?php
require '../../../config.php';

$datos = data_submitted();
$abm = new abmPersona();

require '../../../vendor/autoload.php';

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

?>

<div class="contenedorPrincipal">
    <h2>Manejo de errores</h2>
    <div class="card-form">
        <?php
        $abm->buscar($datos);
        $abm->alta($datos);
        print_r($datos);
        ?>
    </div>
</div>

<?php
include_once "../estructura/footer.php"; 
?>