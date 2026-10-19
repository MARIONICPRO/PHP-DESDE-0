<?php
//funciones preestablecida por php
echo "marca de tiempo: ".time()."<br>";

echo "raiz cuadrada de 9:".sqrt(9)."<br>";

echo "numero aleatorio  entre el numero 90 y 100 ".rand(90,100)."<br>";

echo "numero pi: ".pi()."<br>"

// hay mas pero esas estan en el documento
?>
<?php
function factorial($n){
    $resultado = 1;
    for ($i=1; $i <=$n ; $i++) { 
    $resultado = $resultado * $i;
}
return $resultado;
}
$resultado = factorial(6);

?>