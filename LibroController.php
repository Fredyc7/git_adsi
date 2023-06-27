<?php
require '../model/LibroModel.php';

class LibroController
{
    private $model;

    public function __construct()
    {
        $db = new PDO('mysql:host=localhost;dbname=libros', 'root', '');
        $this->model = new LibroModel($db);
    }

    public function getLibros()
    {
        return $this->model->getLibros();
    }

    public function getLibroById($id)
    {
        return $this->model->getLibroById($id);
    }

    public function crearLibro($titulo, $autor, $genero, $anio_publicacion, $descripcion)
    {
        return $this->model->crearLibro($titulo, $autor, $genero, $anio_publicacion, $descripcion);
    }

    public function actualizarLibro($id, $titulo, $autor, $genero, $anio_publicacion, $descripcion)
    {
        return $this->model->actualizarLibro($id, $titulo, $autor, $genero, $anio_publicacion, $descripcion);
    }

    public function eliminarLibro($id)
    {
        return $this->model->eliminarLibro($id);
    }
}
