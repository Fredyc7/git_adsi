<?php
class LibroModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getLibros() {
        $query = "SELECT * FROM Libros";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLibroById($id) {
        $query = "SELECT * FROM Libros WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function crearLibro($titulo, $autor, $genero, $anio_publicacion, $descripcion) {
        $query = "INSERT INTO Libros (titulo, autor, genero, anio_publicacion, descripcion) 
                  VALUES (:titulo, :autor, :genero, :anio_publicacion, :descripcion)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $statement->bindParam(':autor', $autor, PDO::PARAM_STR);
        $statement->bindParam(':genero', $genero, PDO::PARAM_STR);
        $statement->bindParam(':anio_publicacion', $anio_publicacion, PDO::PARAM_INT);
        $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $statement->execute();
        return $this->db->lastInsertId();
    }

    public function actualizarLibro($id, $titulo, $autor, $genero, $anio_publicacion, $descripcion) {
        $query = "UPDATE Libros SET titulo = :titulo, autor = :autor, genero = :genero,
                  anio_publicacion = :anio_publicacion, descripcion = :descripcion 
                  WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $statement->bindParam(':autor', $autor, PDO::PARAM_STR);
        $statement->bindParam(':genero', $genero, PDO::PARAM_STR);
        $statement->bindParam(':anio_publicacion', $anio_publicacion, PDO::PARAM_INT);
        $statement->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }

    public function eliminarLibro($id) {
        $query = "DELETE FROM Libros WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }
}
