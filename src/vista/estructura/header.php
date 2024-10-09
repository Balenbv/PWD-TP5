<?php
    require_once "../../../vendor/autoload.php";
    use Whoops\Run;
    use Whoops\Handler\PrettyPageHandler;
    $whoops = new Run();
    $whoops->pushHandler(new PrettyPageHandler());
    $whoops->register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <title>TP-5 Librerias utiles.</title>
    
    <link rel="stylesheet" href="../assets/estilos.css?v=2.5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
    <div class="header">
            <h1>TP-5 Librerias utiles.</h1>
            <div class="container-flex">
                <div class="flex-item-1">
                    <a href="../../vista/paginas/index.php" class="boton"><i class="bi bi-house"></i></a>
                </div>
                <div class="flex-item-2">
                    <ul>
                        <li class=""><a href="../paginas/generadorQR.php" style="text-decoration:none;">Generador de QR</a></li>
                        <li class=""><a href="../action/accionManejo.php"  style="text-decoration:none;">Manejo de errores. </a></li>
                    </ul>
                </div>
                
            </div>
         
    </div>
