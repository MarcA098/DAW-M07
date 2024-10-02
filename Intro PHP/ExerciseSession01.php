<?php
// Iniciar sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $product = $_POST['product'];
    $quantity = (int)$_POST['quantity']; // Convertir a entero
    $action = $_POST['action'];
    $workerName = $_POST['workerName'];

    // Actualizar el nombre del trabajador en la sesión
    $_SESSION['workerName'] = $workerName;

    // Inicializar el inventario si no existe para el trabajador
    if (!isset($_SESSION['inventory'][$workerName])) {
        $_SESSION['inventory'][$workerName] = ['milk' => 3, 'softDrink' => 0];
    }

    // Lógica para actualizar el inventario
    if ($action == 'add') {
        $_SESSION['inventory'][$workerName][$product] += $quantity;
    } elseif ($action == 'remove') {
        // Verificar si hay suficientes unidades para quitar
        if ($_SESSION['inventory'][$workerName][$product] >= $quantity) {
            $_SESSION['inventory'][$workerName][$product] -= $quantity;
        } else {
            $_SESSION['error'] = 'No se pueden eliminar más productos de los disponibles';
        }
    } elseif ($action === 'reset') {
        // Reiniciar solo el inventario del trabajador actual
        $_SESSION['inventory'][$workerName] = ['milk' => 3, 'softDrink' => 0];
    }

    // Redirigir de vuelta a vista01.php
    header('Location: vista01.php');
    exit();
}
