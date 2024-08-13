<?php
session_start();

// Asegúrate de que la información necesaria esté disponible
if (isset($_POST['producto_id']) && isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['color']) && isset($_POST['cantidad'])) {
    $producto_id = $_POST['producto_id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $cantidad = (int)$_POST['cantidad'];

    // Inicializar el carrito en la sesión si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Agregar el producto al carrito
    if (isset($_SESSION['carrito'][$producto_id])) {
        $_SESSION['carrito'][$producto_id]['cantidad'] += $cantidad;
    } else {
        $_SESSION['carrito'][$producto_id] = array(
            'nombre' => $nombre,
            'precio' => $precio,
            'color' => $color,
            'cantidad' => $cantidad
        );
    }

    // Redirigir al carrito
    header('Location: carrito.php');
    exit();
} else {
    // Manejo de error si no se reciben los datos necesarios
    echo 'Error: datos del producto no recibidos.';
}
?>
