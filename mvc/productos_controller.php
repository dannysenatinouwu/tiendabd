<?php
require_once "conf/conexion.php"; // Incluye tu archivo de conexión
$conexion = conectar(); // Llama a la función de conexión

include "DatabaseManager.php";
$dbManager = new DatabaseManager($conexion);
$productos = $dbManager->getProductos();

include "index.php";
?>
