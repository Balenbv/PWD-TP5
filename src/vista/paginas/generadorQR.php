<?php
include_once "../estructura/header.php"; 
//session_start();
?>

<div class="contenedorPrincipal">
    <div class="container-sm">
        <h1 style="padding-top: 10%">Generador QR</h1>
    </div>    

    <div class="container">
        <div class="textoInformativo">
            <p>Los códigos QR (Quick Response) son un tipo de código de barras bidimensional que se pueden escanear con la cámara de un teléfono inteligente. Se utilizan para almacenar información que se puede leer rápidamente, como URLs, datos de contacto, texto, entre otros.</p>
        </div>
    
        <div class="card" style="border-radius:15px; display: flex; justify-content:center; align-items: center;">
            <!-- <h1 class="card-title">Generador de codigo QR</h1> -->

            <div class="card-body">
                <form action="../action/generaQRaction.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="contenido">Contenido del QR:</label>
                        <input type="text" id="contenido" name="contenido" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="tamano">Tamaño del QR (px):</label>
                        <input type="number" id="tamano" name="tamano" class="form-control" value="100" min="100" max="150" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="bgColor">Color de Fondo:</label>
                        <input type="color" id="bgColor" name="bgColor" class="form-control" value="#FFFFFF">
                    </div>
                    
                    <div class="form-group">
                        <label for="color">Color del Código:</label>
                        <input type="color" id="color" name="color" class="form-control" value="#000000">
                    </div>


                    <button type="submit" class="btn btn-primary">Generar QR</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../estructura/footer.php"; 
?>
