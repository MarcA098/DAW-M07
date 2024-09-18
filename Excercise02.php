<?php
// Declarar variables numéricas
$num1 = rand(0,7);

// Creación del switchcase
switch ($num1) {
    case 1:
        echo "Ha salido $num1, equivale a lunes.";
        break;
    case 2:
        echo "Ha salido $num1, equivale a martes.";
        break;
    case 3:
        echo "Ha salido $num1, equivale a miércoles.";
        break;
    case 4:
        echo "Ha salido $num1, equivale a jueves.";
        break;
    case 5:
        echo "Ha salido $num1, equivale a viernes.";
        break;
    case 6:
        echo "Ha salido $num1, equivale a sábado.";
        break;
    case 7:
        echo "Ha salido $num1, equivale a domingo.";
        break;
    default:
        echo "Ha salido $num1, no equivale a ningún día de la semana.";
}
