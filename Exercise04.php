<?php
// Generar un número aleatorio entre 1 y 6
$dado = rand(1, 6);

// Definir las caras opuestas y los números en letras
$caras_opuestas = [1 => 6, 2 => 5, 3 => 4, 4 => 3, 5 => 2, 6 => 1];
$numeros_en_letras = [1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 5 => 'cinco', 6 => 'seis'];

// Mostrar el valor obtenido y su valor opuesto
echo "El número obtenido es: $dado (" . $numeros_en_letras[$dado] . ")<br>";
echo "El valor en la cara opuesta es: " . $caras_opuestas[$dado] . " (" . $numeros_en_letras[$caras_opuestas[$dado]] . ")";