<?php 
//variable
$nombre = " Victor Arana Flores"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php /* para concatenar varias variables se utiliza .
    y el nombre de la variable a concatenar*/
     echo "hola mundo mi nombre es " . $nombre ;
     /* en comillas dobles se puede meter la variable 
     dentro del mismo Texto en caso de comillas simples
     no se puede toca concatenar con el . 
     */?>
</body>
</html>