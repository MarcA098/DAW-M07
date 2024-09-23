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

echo"<br>6)<br>";

// Creación del array asociativo

$notas = ['Miguel' => 5, 'Luís' => 7, 'Marta' => 10, 'Isabel' => 8, 'Aitor' => 4, 'Pepe' => 1];

// Método para ordenar un array asociativo en orden descendente manteniendo las claves
arsort( $notas );

// Recorrer el array
foreach ($notas as $key => $value) {
    echo "$key: $value<br>";
}

echo "<br>7)<br>";

$nValue = 0;
$cont = 0;

foreach ($notas as $key => $value) {
    $nValue += $value;
    $cont++;
}

// Forzar la conversión a float para obtener decimales
$media = $nValue / $cont;

// Función para cambiar el formato numérico a 2 decimales
echo "La media de los alumnos es:" . " " . number_format($media,2);
echo "<br>Los alumnos por encima de la media son:<br>";

// Mostrar alumnos por encima de la media
foreach ($notas as $key => $value){
    if ($value > $media) {
        echo "$key<br>";
    }
}

echo "<br>8)<br>";

// Variables para guardar mejor nota y alumno correspondiente
$mayorNota = 0;
$mejorAlumno = "";

// Bucle con una condición en la que evaluamos la mayor nota y la guardamos
foreach ($notas as $key => $value){
    if ($value > $mayorNota) {
        $mayorNota = $value;
        $mejorAlumno = $key;
    }
}

echo "El mejor alumno es $mejorAlumno con la nota de $mayorNota";