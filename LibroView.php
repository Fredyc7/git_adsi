<?php
class LibroView {
    public function mostrarLibros($libros) {
        // Mostrar los libros en la vista
        foreach ($libros as $libro) {
            echo "ID: " . $libro['id'] . "<br>";
            echo "Título: " . $libro['titulo'] . "<br>";
            echo "Autor: " . $libro['autor'] . "<br>";
            echo "Género: " . $libro['genero'] . "<br>";
            echo "Año de publicación: " . $libro['anio_publicacion'] . "<br>";
            echo "Descripción: " . $libro['descripcion'] . "<br>";
            echo "<br>";
        }
    }

    public function mostrarMensaje($mensaje) {
        // Mostrar un mensaje en la vista
        echo $mensaje;
    }
}
