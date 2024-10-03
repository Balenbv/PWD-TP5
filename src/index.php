<?php



use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

$qrCode = new QrCode('diegooooo');

// Save black on white PNG image 100 px wide to filename.png. Colors are RGB arrays.
$output = new Output\Png();
$data = $output->output($qrCode, 100, [255, 255, 255], [0, 0, 0]);
file_put_contents('filename.png', $data);


$output = new Output\Html();


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>'.$output->output($qrCode).'</h1>');
$mpdf->Output();
