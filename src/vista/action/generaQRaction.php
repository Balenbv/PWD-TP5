<?php
include "../../../vendor/autoload.php";
include '../estructura/header.php';
include '../../utils/utils.php';

//use es porque hay varios metodos con el mismo nombre
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$datosFormulario = data_submitted();
$ObjCodeQr = new QrCode($datosFormulario['contenido']);

$objPng = new Output\Png();

//sobre escribe los datos de los parametros que tiene el metodo
$datosQr = $objPng->output($ObjCodeQr, $datosFormulario['tamano'], hexToRgb($_POST['color']), hexToRgb($_POST['bgColor']));
file_put_contents('filename.png', $datosQr);

$objSvg = new Output\Svg();
$mostrarQrSvg = $objSvg->output($ObjCodeQr, $datosFormulario['tamano'] , 'white', 'black');

$objHtml = new Output\Html();
$mostrarQrHTML = $objHtml->output($ObjCodeQr);

?>

<div class="card-qr">

        <h1 class="h1-qr">FORMATO <span class="text-info">PNG</span></h1>
        <img src="filename.png" alt="" class="margenes-qr">
        <h1 class="h1-qr">FORMATO <span class="text-info">SVG</span></h1>

    <div class="margenes-qr">

        <?php echo $mostrarQrSvg; ?>

    </div>

        <h1 class="h1-qr">FORMATO <span class="text-info">HTML</span></h1>

    <div>

        <?php echo $mostrarQrHTML; ?>

    </div>
</div>


<?php include '../estructura/footer.php';?>