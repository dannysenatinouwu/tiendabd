<?php
// Incluir el archivo de conexión
require_once("conf/conexion.php");

// Realizar una consulta SQL para obtener los productos
$sql = "SELECT * FROM productos";
$query = sqlsrv_query($conn, $sql);

if ($query === false) {
    die("Error en la consulta: " . print_r(sqlsrv_errors(), true));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Nombre del Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
        <?php
        while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id_producto'] . "</td>";
            echo "<td>" . $row['categoria'] . "</td>";
            echo "<td>" . $row['nombre_producto'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>S/. " . $row['precio_producto'] . "</td>";
            echo "<td><img src='img/productos/" . $row['imagen'] . ".png' width='100' height='100'></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
