<?php

$cadenas = "holi mundo como estas";

//indice del caracater
echo $cadenas(1);
//mostrar la cantidad de nits
echo strlen($cadenas);
//mostrar la cantidad de caracteres
echo mb_strlen($cadenas);
//saber que indice esta mostrando las coincidencias de isquierda a derecha
echo strpos($cadenas, 'i');
//saber que indice esta mostrando las coincidencias de derecha a isquierda
echo strrpos($cadenas, 'i');
//si se encuentra en la cadea
echo str_contains($cadenas,'mundo');
//si comienza con
echo str_starts_with($cadenas,'holi|');
//si termina con
echo str_ends_with($cadenas , 'estas');
//comparar
$cadena1 = "prueba";
$cadena2 = "prueba";

if (strcmp($cadena1 , $cadena2) == 0) {
    echo "las dos cadenas son iguales";
}

?>