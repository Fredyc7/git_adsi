<?php
require '../controller/LibroController.php';

$controller = new LibroController();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = $controller->getLibroById($id);

    if (!$libro) {
        die('Libro no encontrado');
    }

    $controller->eliminarLibro($id);
    header('Location: index.php');
    exit;
} else {
    die('ID de libro no especificado');
}
