<?php
// Iniciar sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity']; //casteamos a int ya que los números son string en html
    $action = $_POST['action'];

    // Lógica para actualizar el inventario
    if ($action == 'add') {
        $_SESSION['inventory'][$product] += $quantity;
    } elseif ($action == 'remove') {
        // Verificar si hay suficientes unidades para quitar
        if ($_SESSION['inventory'][$product] >= $quantity) {
            $_SESSION['inventory'][$product] -= $quantity;
        } else {
            $_SESSION['error'] = 'No se pueden eliminar más productos de los disponibles';
        }
    } elseif ($action === 'reset') {
        $_SESSION['inventory'] = ['milk' => 3, 'softDrink' => 0];
    }

    // Redirigir de vuelta a index.php
    header('Location: vista01.php');
    exit();
}
