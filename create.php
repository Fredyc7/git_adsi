<!DOCTYPE html>
<html>

<head>
    <title>Crear Libro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Crear Libro</h2>
        <form action="create_process.php" method="POST">
            <div class="form-group">
                <label>Título:</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Autor:</label>
                <input type="text" name="autor" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Género:</label>
                <input type="text" name="genero" class="form-control">
            </div>
            <div class="form-group">
                <label>Año de Publicación:</label>
                <input type="number" name="anio_publicacion" class="form-control">
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</body>

</html>