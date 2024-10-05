<?php

include_once '../estructura/header.php';
?>
<div class="contenedorPrincipal"> 
    <div class="container-sm">
        <ul>
            <li><a href="#qrcode" class="fs-1">Qrcode.</a></li>
            <li><a href="#whoop" class="fs-1">Whoops.</a></li>
        </ul>
        
    </div>
    <div class="contenido-descarga container-sm mt-4 border">
        <p>mpdf/qrcode (PHP Edition)</p>
        <a href="#">Descarga Qrcode</a>
    </div>
    <div class="container-sm mt-4 ">
        <h1 class="contenidos-tutorial border-bottom">Instalacion de Qrcode para PHP</h1>
    </div>
    <div class="contenido-compatibilidades container-sm mt-4">
        <h2 class="contenidos-tutorial">Compatibilidad de versiones</h2>
        <p>Qrcode para PHP requiere PHP 5.0 hasta 8.0 </p>
    </div>
    <div class="container-sm mt-4">
        <h2 class="contenidos-tutorial">Extraccion de la distribucion de Qrcode</h2>
        <p>Qrcode para PHP es compatible con Windows , linux y macOS .Verifique que la distribucion de Qrcode que ha descargado sea para la edicion del sistema operativo de PHP que esta usando .Si no esta seguro del tipo de PHP que esta usando .Puede usar phpInfo para averiguarlo</p>
        <p>Para comenzar , puede usar <a href="https://getcomposer.org/">Composer</a> para poder instalar la libreria mas facilmente</p>
    </div>
    <div class="container-sm mt-4">
        <h2 class="contenidos-tutorial">Instalacion de Qrcode para PHP:</h2>
        <h3>Requisitos Previos</h3>
        <p>Antes de comenzar, asegúrate de tener instalado Composer, que es una herramienta para la gestión de dependencias en PHP. Si no lo tienes, puedes descargarlo e instalarlo desde su sitio oficial</p>
        <h3>Instalacion de la Biblioteca</h3>
        <ol>
            <li>Abre tu terminal y navega al directorio de tu proyecto PHP.</li>
            <li>Ejecuta el siguiente comando para instalar la biblioteca Endroid QR Code:</li>
        </ol>
        <code>composer require endroid/qr-code</code>
        <h3>Uso Basico</h3>
        <p>Una vez instalada la biblioteca, puedes generar códigos QR con el siguiente script:</p>
        <code>
            require 'vendor/autoload.php';
            <br>
            use Endroid\QrCode\QrCode;
            use Endroid\QrCode\Writer\PngWriter;
            <br>
            // Crear una instancia de QrCode
            <br>
            $qrCode = new QrCode('Texto para el código QR');
            <br>
            // Personalizar el código QR (opcional)
            <br>
            $qrCode->setSize(300);
            $qrCode->setMargin(10);
            $qrCode->setEncoding('UTF-8');
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
            $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
            $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
            <br>
            // Crear una instancia de PngWriter para generar la imagen
            <br>
            $writer = new PngWriter();
            $result = $writer->write($qrCode);
            <br>
            // Guardar la imagen en un archivo
            <br>
            $result->saveToFile(__DIR__ . '/qrcode.png');
            <br>
            // Mostrar la imagen en el navegador
            <br>
            header('Content-Type: ' . $result->getMimeType());
            echo $result->getString();
        </code>
    </div >
        <div class="container-sm" id="whoop">
            <div class="mt-5">
                <h1 class="contenidos-tutorial">Instalacion de WHOOPS para PHP</h1>
                <div class="contenido-descarga container-sm mt-4 border">
                    <p>filps/whoops (PHP Edition)</p>
                    <a href="https://github.com/filp/whoops">Descarga whoops</a>
                </div>
                <div>
                    <h3>Uso de excepciones</h3>
                    <p>En PHP, puedes lanzar excepciones usando la palabra clave throw y manejarlas con try-catch. Esto te permite interceptar errores y reaccionar ante ellos de manera controlada.</p> <br>
                    <p>
                        <code>
                                                try { <br>
                             throw new Exception("Ocurrió un error."); <br>
                                } catch (Exception $e) {<br>
                                // Whoops manejará el error automáticamente <br>
                             } <br>
                        </code>
                    </p>
                </div>
                <div>
                    <h3>Uso Basico.</h3>
                    <p> Aquí un ejemplo básico de cómo configurar y usar Whoops:</p>
                </div>
                <code>
                        require 'vendor/autoload.php'; <br>
                        <br>
                        <br>
                        use Whoops\Run; <br>
                        use Whoops\Handler\PrettyPageHandler; <br>
                        <br>
                        // Configuración de Whoops <br>
                        $whoops = new Run(); <br>
                        $whoops->pushHandler(new PrettyPageHandler()); <br>
                        $whoops->register(); <br>
                        <br>
                        // Generar un error para probar <br>
                        $undefinedVariable; // Esto causará un error <br>
                        <br>
                </code>
            </div>
        </div>
</div>

<?php

include_once '../estructura/footer.php';
?>
