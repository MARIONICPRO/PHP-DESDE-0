<?php
//salirse del bucle al hacer break
for ($i=0; $i <= 20 ; $i++) { 
    if ($i == 11) {
        break;
    }
}
for ($j=0; $j <=20 ; $j++) { 
      if ($j == 7) {
        continue;
    }
    echo $i . "<br>";
}
?>