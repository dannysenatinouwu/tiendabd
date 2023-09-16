<?php
// carrito-icon.php

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $idPro = $_POST['idPro'];
    $imagen = $_POST['imagen'];
    $nombrePro = $_POST['nombrePro'];
    $precioPro = $_POST['precioPro'];

    // Realizar las operaciones necesarias con los datos recibidos

    // Por ejemplo, puedes guardarlos en una base de datos, en una sesión de carrito, etc.

    // Crear un array con los datos del producto agregado
    $productoAgregado = array(
        'idPro' => $idPro,
        'imagen' => $imagen,
        'nombrePro' => $nombrePro,
        'precioPro' => $precioPro
    );

    // Devolver la respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($productoAgregado);
    exit;
}
?>
