<?php

include "../../../vendor/autoload.php";
include '../estructura/header.php';
include '../../utils/utils.php';

session_start(); 
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$datosForm = data_submitted();

$qrCode = new QrCode($datosForm['contenido']);

$output = new Output\Png();

$datosQr = $output->output($qrCode, $datosForm['tamano'], hexToRgb($_POST['color']), hexToRgb($_POST['bgColor']));
file_put_contents('filename.png', $datosQr);

// Echo a SVG file, 100 px wide, black on white.
// Colors can be specified in SVG-compatible formats
$output = new Output\Svg();
$qrSvg = $output->output($qrCode, $datosForm['tamano'] , 'white', 'black');

// Echo an HTML table
$output = new Output\Html();
$qrHTML = $output->output($qrCode);
?>

<div class="card-qr">
        <h1 class="h1-qr">FORMATO <span class="text-info">PNG</span></h1>
        <img src="filename.png" alt="" class="margenes-qr">
        <h1 class="h1-qr">FORMATO <span class="text-info">SVG</span></h1>
    <div class="margenes-qr">
        <?php echo $qrSvg; ?>
    </div>
        <h1 class="h1-qr">FORMATO <span class="text-info">HTML</span></h1>
    <div>
        <?php echo $qrHTML; ?>
    </div>
</div>



<?php include '../estructura/footer.php';?>