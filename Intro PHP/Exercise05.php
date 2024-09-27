<?php
// Generar un número aleatorio entre 0 y 20
function aleatorioHasta100(): int { //Creación de función
// Declarar variables necesarias
    $finalNum = 0;
    $par = 0;
    $impar = 0;
// Bucle para hacer la suma de los números aleatorios
    do {
        $num = rand(0, 20);
        $finalNum += $num;
// Comprobación de números pares e impares
        if ($num % 2 == 0) {
            $par++;
        } else {
            $impar++;
        }

        echo "Suma de los números: $finalNum<br>";

    } while ($finalNum <= 100); 
    
    echo "<br>Total de números pares: $par<br>";
    echo "<br>Total de números impares: $impar<br>";

    return $finalNum;
}
// Llamada a la función
$finalNum = aleatorioHasta100();



