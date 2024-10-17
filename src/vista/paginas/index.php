<?php

include_once '../estructura/header.php';
?>
<div class="contenedorPrincipal"> 
    <div class="container-sm pt-5">
    <h1>Links para ir a las paginas</h1>
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
        <h1 class="contenidos-tutorial" style="border:2px solid">Instalacion de Qrcode para PHP</h1>
    </div>
    <div class="contenido-compatibilidades container-sm mt-4">
        <h3>Compatibilidad de versiones</h3>
        <p>Qrcode para PHP requiere PHP 5.0 hasta 8.0 </p>
    </div>
    <div class="container-sm mt-4">
        <h3 class="contenidos-tutorial">Extraccion de la distribucion de Qrcode</h3>
        <p>Qrcode para PHP es compatible con Windows , linux y macOS .Verifique que la distribucion de Qrcode que ha descargado sea para la edicion del sistema operativo de PHP que esta usando .Si no esta seguro del tipo de PHP que esta usando .Puede usar phpInfo para averiguarlo</p>
        <p>Para comenzar , puede usar <a href="https://getcomposer.org/">Composer</a> para poder instalar la libreria mas facilmente</p>
    </div>
    <div class="container-sm mt-4">
        <h3 class="contenidos-tutorial">Instalacion de Qrcode para PHP:</h3>
        <h3>Requisitos Previos</h3>
        <p>Antes de comenzar, asegúrate de tener instalado Composer, que es una herramienta para la gestión de dependencias en PHP. Si no lo tienes, puedes descargarlo e instalarlo desde su sitio oficial</p>
        <h3>Instalacion de la Biblioteca</h3>
        <ol>
            <li>Abre tu terminal y navega al directorio de tu proyecto PHP.</li>
            <li>Ejecuta el siguiente comando para instalar la biblioteca Endroid QR Code:</li>
        </ol>
        <code>composer require endroid/qr-code</code>
        <br>
        <br>
        <h3>Uso Basico</h3>
        <p>Una vez instalada la biblioteca, puedes generar códigos QR con el siguiente script:</p>
        <code>
            require 'vendor/autoload.php';
            <br>
            use Endroid\QrCode\QrCode;
            <br>
            use Endroid\QrCode\Writer\PngWriter;
            <br>
            // Crear una instancia de QrCode
            <br>
            $qrCode = new QrCode('Texto para el código QR');
            <br>
            // Personalizar el código QR (opcional)
            <br>
            $qrCode->setSize(300);
            <br>
            $qrCode->setMargin(10);
            <br>
            $qrCode->setEncoding('UTF-8');
            <br>
            $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
            <br>
            $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
            <br>
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
            <br>
            echo $result->getString();
        </code>
    </div >
        <div class="container-sm" id="whoop">
            <div class="mt-5">
                <h1 class="contenidos-tutorial" style="border:2px solid">Instalacion de WHOOPS para PHP</h1>
                <div class="contenido-descarga container-sm mt-4 border">
                    <p>filps/whoops (PHP Edition)</p>
                    <a href="https://github.com/filp/whoops">Descarga whoops</a>
                </div>
                <br>
                <h3>Compatibilidad de versiones</h3>
                <p>La librería Whoops es compatible con PHP a partir de la versión 7.1 y 8.0</p>
                <h3 class="contenidos-tutorial">Extraccion de la distribucion de whooops</h3>
                <p>Distribuciones Whoops funciona en todas las plataformas principales, incluyendo Windows, macOS y Linux</p>
                <h3>Método de instalación</h3>
                <p>Para instalar Whoops usando Composer, sigue estos pasos:</p>
                <ol>
                    <li>Abre un terminal y navega al directorio de tu proyecto.</li>
                    <li>Ejecuta el siguiente comando:</li>
                    <code>composer require filp/whoops</code>
                </ol>

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
                <h3>Uso Basico.</h3>
                <p> Aquí un ejemplo básico de cómo configurar y usar Whoops:</p>
            
                <code>
                        require 'vendor/autoload.php'; 
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
