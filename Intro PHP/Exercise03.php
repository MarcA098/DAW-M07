<?php
// 1. Declarar dos variables con valores numéricos superiores a 10
$var1 =  rand(11,20);
$var2 =  rand(11,20);;

echo "Variable 1: $var1<br>";
echo "Variable 2: $var2<br><br>";

// 2. Mostrar la progresión de números pares desde 0 hasta el valor de la primera variable usando un bucle for
echo "Progresión de números pares desde 0 hasta $var1:<br>";
for ($i = 0; $i <= $var1; $i += 2) {
    echo "$i ";
}
echo "<br><br>";

// 3. Mostrar la progresión numérica desde la segunda variable hasta 0 usando un bucle while
echo "Progresión desde $var2 hasta 0:<br>";
$j = $var2;
while ($j >= 0) {
    echo "$j ";
    $j--;
}
echo "<br><br>";

// 4. Mostrar la progresión desde la primera variable a la segunda usando un bucle do/while
echo "Progresión desde $var1 hasta $var2:<br>";
if ($var1 <= $var2) {
    // Si la primera variable es menor o igual a la segunda, incrementa
    $k = $var1;
    do {
        echo "$k ";
        $k++;
    } while ($k <= $var2);
} else {
    // Si la segunda variable es más pequeña, solo imprime una vez el valor de la primera variable
    echo "$var1";
}
echo "<br>";
