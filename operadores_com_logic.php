<?php

$a = 10;
$b = 10;
//operadores comparacion 
echo $a == $b; // operador == iguales
echo $a <> $b; // operador <> si son diferentes
echo $a != $b; // operador != si son diferentes
echo $a > $b;  // a > b mayor que
echo $a < $b;  // a < b menor que
echo $a <= $b; // a < b menor o igual
echo $a >= $b; // a < b mayor o igual
//mostrar true o false
var_dump($a == $b); // operador == iguales saldra true
var_dump($a <> $b); // operador <> si son diferentes saldra true
var_dump($a != $b); // operador != si son diferentes saldra true
var_dump($a > $b);  // a > b mayor que
var_dump($a < $b);  // a < b menor que
var_dump($a >= $b);  // a > b mayor o igual que
var_dump($a <= $b);  // a < b menor o igual que
//OPERADORES LOGICOS && ||
$c = true;
$b = true;
// && incluir todas las condiciones
/*
true y true  = true
false y true= false
true y false = false
false y false = false
*/
var_dump($c && $b);
// || solo necesita una condicion
/*
true y true  = true
false y true= true
true y false = true
false y false = false
*/
var_dump($c || $b);












?>