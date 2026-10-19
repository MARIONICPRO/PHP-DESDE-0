<?php
//condicional resumida
$valor = $a > $b ? 'mayor' : 'menor';
//anidar condicionales con operadores ternarios
$valor = $a > $b ? 'mayor' : ($a < $b ? 'menor' : 'igual');
//ejemplo
echo "el valor de a es $valor que b ";
?>
