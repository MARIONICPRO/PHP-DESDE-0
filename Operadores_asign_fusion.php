<?php
//operadores de asignacion combinados/fusionados
$a = 10;

//aumentar en una unidad
$a++; // igual $++a
//aumentar en una unidad
$a--; // igual $--a
/*
$a++ agarra primero la variable y luego hace la suma
en caso de estos codigos $b = $a++ el b se quedara solo
con el valor incial de a y no mostrara la suma 
$++a agarra la suma le suma la variable y entonces b si 
mostrara el nuevo valor en este caso seria 11

$b = $a++ si mostramos la b dara 10
$b = $++a si mostramos la b dara 11
*/
//combinaciones
$c = 10;
$d = 5;
//suma
$c = $c + $d;//mostrara 15
$c += $d; //mostrara 15
//resta
$c = $c - $d;//mostrara 5
$c -= $d; //mostrara 5
//multiplicacion
$c = $c * $d;//mostrara 50
$c *= $d; //mostrara 50
//DIVISION
$c = $c / $d;//mostrara 2
$c /= $d; //mostrara 2
//Modulo
$c = $c % $d;//mostrara 0
$c %= $d //mostrara 0
?>