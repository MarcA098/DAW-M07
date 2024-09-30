<?php
// Iniciar sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $position = (int)$_POST["position"];
    $action = $_POST["action"];
// Switch para tratar los casos, en vez de elseif's
    switch ($action) {
        case 'modify':
            $newValue = (int)$_POST["newValue"];
            $_SESSION["array"][$position] = $newValue;
            break;
        case 'average':
            $average = array_sum($_SESSION['array']) / count($_SESSION['array']);
            $_SESSION['average'] = $average;
            break;
        case 'reset':
            $_SESSION["array"] = [10,20,30];
            unset($_SESSION["average"]);
            break;
        default:
            break;
    }
    header('Location: vista02.php');
    exit();
}