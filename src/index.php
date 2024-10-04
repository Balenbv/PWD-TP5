
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de codigo QR.</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 " >
        <div class="card" style="border-radius:15px; display: flex; justify-content:center; align-items: center;">
              <h1 class="card-title">Generador de codigo QR</h1>
              <div class="card-body"style="max-width: 300px; box-shadow: 0 0 10px; border-radius: 10px;" >
                
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
    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>