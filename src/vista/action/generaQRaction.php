<?php
include "../../../vendor/autoload.php";
include '../estructura/header.php';

session_start(); 
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$qrCode = new QrCode($_POST['contenido']);

$output = new Output\Png();

function hexToRgb($hex) {
    // Eliminar el símbolo '#' si está presente
    $hex = str_replace("#", "", $hex);

    // Convertir el valor hexadecimal a RGB
    if (strlen($hex) == 3) {
        // Formato abreviado (ej. #FFF)
        $r = hexdec($hex[0] . $hex[0]);
        $g = hexdec($hex[1] . $hex[1]);
        $b = hexdec($hex[2] . $hex[2]);
    } else {
        // Formato completo (ej. #FFFFFF)
        $r = hexdec($hex[0] . $hex[1]);
        $g = hexdec($hex[2] . $hex[3]);
        $b = hexdec($hex[4] . $hex[5]);
    }

    return array($r, $g, $b);
}

$data = $output->output($qrCode, 100, hexToRgb($_POST['color']), hexToRgb($_POST['bgColor']));
file_put_contents('filename.png', $data);

// Echo a SVG file, 100 px wide, black on white.
// Colors can be specified in SVG-compatible formats
$output = new Output\Svg();
$qrSvg = $output->output($qrCode, 100, 'white', 'black');

// Echo an HTML table
$output = new Output\Html();
$qrHTML = $output->output($qrCode);
?>

<div class="card-qr">
    <h1 class="h1-qr">FOMATO <span class="text-info">PNG</span></h1>
    <img src="filename.png" alt="" class="margenes-qr">
    <h1 class="h1-qr">FOMATO <span class="text-info">SVG</span></h1>
    <div class="margenes-qr">
        <?php echo $qrSvg; ?>
    </div>
    <h1 class="h1-qr">FOMATO <span class="text-info">HTML</span></h1>
    <div class="margenes-qr">
        <?php echo $qrHTML; ?>
    </div>
</div>

<?php
include '../estructura/footer.php';
?>