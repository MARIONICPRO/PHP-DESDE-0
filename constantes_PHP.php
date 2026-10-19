<?php
//salto de linea
echo "<br>";
Define('CURSO','PHP 8 desde cero');
Define('USUARIO_1','VICTOR');
//ARRAY
Define('ANIMALES',[
    'perro',
    'gato',
    'loro',
    'tortuga',
]);
//mostrar constantes
echo CURSO;
echo "<br>";
echo USUARIO_1;
echo "<br>";
//mostrar constante con arreglo
echo ANIMALES[0];
echo "<br>";
//comprobar si una constante esta definida
if(defined('CURSO')){
    echo "si se ha definido";
}
// VARIABLES DEFINIDAS POR PHP GLOBAL
//saber que version de php tengo
echo "Mi version de php es:" . PHP_VERSION;
echo "<br>";
//saber que sistema operativo tengo
echo "Mi sistema operativo es: ". PHP_OneS;
echo "<br>";
//ruta de las extensiones
echo PHP_EXTENSION_DIR;
echo "<br>";
//MUESTRA LA API DEL SERVIDOR
echo PHP_SAPI;
echo "<br>";
//retornar que linea se esta ejecutando 
echo __LINE__;
//retornar el directorio en que me encuentro
echo __FILE__;