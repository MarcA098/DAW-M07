<?php
// Creación del Array asociativo
echo"1)<br>";
$nombres = ['nombre' => 'Sara', 'apellido' => 'Martínez', 'edad' => 23, 'ciudad' => 'Barcelona'];

// Mostrar los valores del array usando foreach
$cont = 1;
foreach ($nombres as $key => $value) {
    echo"dato {$cont}º: $value<br>";
    $cont++;
}

// Creación del Array asociativo
$nombres = ['nombre' => 'Sara', 'apellido' => 'Martínez', 'edad' => 23, 'ciudad' => 'Barcelona'];
echo"<br>2)<br>";

// Mostrar claves/valores del array usando foreach
foreach ($nombres as $key => $value) {
    echo"$key: $value<br>";
    $cont++;
}

// Creación del Array asociativo
$nombres = ['nombre' => 'Sara', 'apellido' => 'Martínez', 'edad' => 24, 'ciudad' => 'Barcelona'];
echo"<br>3)<br>";
// Mostrar claves/valores del array usando foreach
foreach ($nombres as $key => $value) {
    echo"$key: $value<br>";
    $cont++;
}
// Creación del Array asociativo
$nombres = ['nombre' => 'Sara', 'apellido' => 'Martinez', 'edad' => 24];

echo"<br>4)<br>";

// Uso de var_dump para ver los detalles de la variable
var_dump($nombres);

echo"<br>5)<br>";

// Variable cadena de texto
$letters = "a,b,c,d,e,f";

// Uso de explode para convertir una cadena en un array según un delimitador
$array = explode(",", $letters);

// Método para ordenar descendentemente
rsort( $array );

// Mostrar valores de forma descendente
$cont = 1;
foreach ($array as $value) {
    echo "letter {$cont}º: $value<br>";
    $cont++;
}