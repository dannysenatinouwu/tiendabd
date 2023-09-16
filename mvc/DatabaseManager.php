<?php
class DatabaseManager {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getProductos() {
        $query = mysqli_query($this->conexion, "SELECT * FROM productos");
        $productos = array();
        while ($data = mysqli_fetch_assoc($query)) {
            $productos[] = $data;
        }
        return $productos;
    }

    // Otras operaciones de base de datos
}

?>