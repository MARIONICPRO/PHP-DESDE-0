<?php
function factorial($n){
    $resultado = 1;
    for ($i=1; $i <=$n ; $i++) { 
    $resultado = $resultado * $i;
}
echo " el factorial de $n es: $resultado"; 
}
factorial(6);
?>