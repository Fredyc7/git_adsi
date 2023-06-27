<?php
require '../controller/LibroController.php';

$controller = new LibroController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio_publicacion = $_POST['anio_publicacion'];
    $descripcion = $_POST['descripcion'];

    $controller->actualizarLibro($id, $titulo, $autor, $genero, $anio_publicacion, $descripcion);
    header('Location: view.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = $controller->getLibroById($id);

    if (!$libro) {
        die('Libro no encontrado');
    }
} else {
    die('ID de libro no especificado');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Libro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Editar Libro</h2>
        <form action="edit_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
            <div class="form-group">
                <label>Título:</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo $libro['titulo']; ?>" required>
            </div>
            <div class="form-group">
                <label>Autor:</label>
                <input type="text" name="autor" class="form-control" value="<?php echo $libro['autor']; ?>" required>
            </div>
            <div class="form-group">
                <label>Género:</label>
                <input type="text" name="genero" class="form-control" value="<?php echo $libro['genero']; ?>">
            </div>
            <div class="form-group">
                <label>Año de Publicación:</label>
                <input type="number" name="anio_publicacion" class="form-control" value="<?php echo $libro['anio_publicacion']; ?>">
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" class="form-control"><?php echo $libro['descripcion']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>

</html>