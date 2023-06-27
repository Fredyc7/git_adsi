<?php
require_once '../controller/LibroController.php';
require_once 'LibroView.php';

$controller = new LibroController();
$view = new LibroView();

// Obtener todos los libros
$libros = $controller->getLibros();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Lista de Libros</h2>
        <a href="create.php" class="btn btn-primary mb-4">Crear Libro</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Año de Publicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro) : ?>
                    <tr>
                        <td><?php echo $libro['id']; ?></td>
                        <td><?php echo $libro['titulo']; ?></td>
                        <td><?php echo $libro['autor']; ?></td>
                        <td><?php echo $libro['genero']; ?></td>
                        <td><?php echo $libro['anio_publicacion']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $libro['id']; ?>" class="btn btn-sm btn-info">Editar</a>
                            <a href="delete.php?id=<?php echo $libro['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>