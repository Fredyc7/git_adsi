<?php
require_once '../controller/LibroController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio_publicacion = $_POST['anio_publicacion'];
    $descripcion = $_POST['descripcion'];

    // Crear instancia del controlador
    $controller = new LibroController();

    // Crear el libro
    $result = $controller->crearLibro($titulo, $autor, $genero, $anio_publicacion, $descripcion);

    if ($result) {
        // Redireccionar a la página de lista de libros
        header('Location: index.php');
        exit();
    } else {
        // Mostrar mensaje de error en caso de fallo en la creación del libro
        echo 'Error al crear el libro';
    }
} else {
    // Redireccionar si se accede directamente al archivo create_process.php sin enviar datos por POST
    header('Location: index.php');
    exit();
}
