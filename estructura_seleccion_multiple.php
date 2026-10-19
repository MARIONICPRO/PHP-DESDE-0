<?php

$a = 1;
//  switch :caso recomendado en caso de meter mas funciones en cada caso
switch ($a) {
    case '1':
        echo " es Lunes <br>";
        break;
        case '2':
        echo  " es Martes <br>";
        break;
       case '3':
        echo " es Miercoles <br>";
        break;
       case '4':
        echo "es jueves <br>";
        break;
         case '5':
        echo "es viernes <br>";
        break;
         case '6':
        echo "es sabado <br>";
        break;
         case '7':
        echo "es domingo <br>";
        break;
    
    default:
        echo "el valor de $a no es valido <br>";
        break;
}

// recomendado en caso de solo mostrar un mensaje en pantalla
echo match ($a) {
    1 => "lunes",
    2 => "martes" ,
    3 => "miercoles",
    4 => "jueves" ,
    5 => "viernes",
    6 => "sabado" ,
    7 => "domingo",
    default => "el valor de $a no es valido",
}

?>