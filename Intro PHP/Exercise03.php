<?php
// 1. Declarar dos variables con valores numéricos superiores a 10
$var1 = rand(11,80); // Primer valor
$var2 = rand(11,80); // Segundo valor

// 2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la primera con un bucle for
echo "</br>Progresión de números pares desde 0 hasta $var1:\n";
for ($i = 0; $i <= $var1; $i += 2) {
    echo $i . "\n";
}

// 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle while
echo "</br>Progresión desde $var2 hasta 0:\n";
$contador = $var2;
while ($contador >= 0) {
    echo $contador . "\n";
    $contador--;
}


// 4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle do/while
echo "</br>Progresión de $var1 a $var2:\n";
do {
    echo "$var1 . '\n'";
    $var1++;
} while ($var1 <= $var2);

// a. Si la segunda variable es más pequeña, sólo imprimir una vez el valor de la primera variable
if ($var2 < 12) { // Cambia 12 al valor actual de $var1 si es necesario
    echo "</br>Valor de la primera variable: $var1\n";
}