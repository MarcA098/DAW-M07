<?php
// Declarar variables numéricas
$num1 = rand(0,100);
$num2 = rand(0,100);

// Realizar operaciones
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

// Mostrar valores de las variables y resultados
echo "<br>Valor de num1: $num1\n";
echo "Valor de num2: $num2\n";
echo "Suma: $suma\n";
echo "Resta: $resta\n";
echo "División: $division\n";

// Comparar las variables
if ($num1 > $num2) {
    echo "num1 es mayor que num2\n";
} elseif ($num1 < $num2) {
    echo "num1 es menor que num2\n";
} else {
    echo "num1 y num2 son iguales\n";
}

// Calcular el área del triángulo si ambas variables son mayores que 1
if ($num1 > 1 && $num2 > 1) {
    $area = ($num1 * $num2) / 2;
    echo "El área del triángulo con base $num1 y altura $num2 es: $area\n";
} else {
    echo "Ambas variables deben ser mayores que 1 para calcular el área.\n";
}