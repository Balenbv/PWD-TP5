<?php
include_once "../estructura/header.php"; 
?>

<div class="contenedorPrincipal">
    <h1>Generador QR</h1>
    <div class="container " >
        <div class="card" style="border-radius:15px; display: flex; justify-content:center; align-items: center;">
              <!-- <h1 class="card-title">Generador de codigo QR</h1> -->
              <div class="card-body" >
                
                <form action="generar_qr.php" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="contenido">Contenido del QR:</label>
                        <input type="text" id="contenido" name="contenido" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tamano">Tamaño del QR:</label>
                        <input type="text" id="tamano" name="tamano" class="form-control" required>
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
