<?php
require_once '../controller/LibroController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio_publicacion = $_POST['anio_publicacion'];
    $descripcion = $_POST['descripcion'];

    // Crear instancia del controlador
    $controller = new LibroController();

    // Actualizar el libro
    $result = $controller->actualizarLibro($id, $titulo, $autor, $genero, $anio_publicacion, $descripcion);

    if ($result) {
        // Redireccionar a la página de lista de libros
        header('Location: index.php');
        exit();
    } else {
        // Mostrar mensaje de error en caso de fallo en la actualización del libro
        echo 'Error al actualizar el libro';
    }
} else {
    // Redireccionar si se accede directamente al archivo edit_process.php sin enviar datos por POST
    header('Location: index.php');
    exit();
}
