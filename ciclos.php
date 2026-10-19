<?php

$i = 1 ;//index
//se repetira hasta que el index llegue a 10
/*
while ($i <= 10) {
    echo "hola mundo $i <br>";
    $i++;
}
    */
//imprimir aunque sea una vez
//primero ejecuta el codigo y luego se ejecuta la condicion
/*do {
    echo "hola mundo $i <br>";
    $i++;
} while ($i <= 10);
 */

//ejemplo
$base = 2;
$exp = 2;

$resultado = 1 ;

while ($i <= $exp) {
    $resultado = $resultado * $base;
    $i++;
}

echo "el valor de $base elevado ala $exp es : $resultado "

//FOR Y FOREACH
for ($i=0; $i < $exp; $i++) { 
 $resultado = $resultado * $base;
}

?>
<?php
// ejemplo piramide
$filas = 10;

for ($i=0; $i < $filas; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo "*";
    }
    echo "<br>";
}
?>
<?php
//ejemplo foreach
$nombres = ['victor','iris','ivan','elizabeth'];

foreach ($nombres as $indice => $nombre) {

    echo $nombre ." se econtraba en el indice $indice <br>";
}
?>
<?php
//salirse del bucle al hacer break
for ($i=0; $i <= 20 ; $i++) { 
    if ($i == 11) {
        break;
    }
}
//salta un indice caso saltaria el 7
for ($j=0; $j <=20 ; $j++) { 
      if ($j == 7) {
        continue;
    }
    echo $j . "<br>";
}
//cuando encuentre el 7 termina el proceso
for ($l=0; $l <=20 ; $l++) { 
      if ($j == 7) {
        die;//exit
    }
    echo $l . "<br>";
}
?>
