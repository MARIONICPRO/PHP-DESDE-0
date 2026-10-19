
<?php

// ==========================================
// 1. VARIABLE GLOBAL
// ==========================================

// Esta variable se crea fuera de las funciones.
// Por eso, su ámbito es global.
$nombre = "Juan";
$edad = 18;


// ==========================================
// 2. VARIABLE LOCAL
// ==========================================

function mostrarDatos() {

    // Esta variable se crea dentro de la función.
    // Solo se puede utilizar dentro de esta función.
    $ciudad = "Madrid";

    echo "<h3>Variables locales</h3>";

    // Mostramos la variable local.
    echo "Ciudad: " . $ciudad . "<br>";

    // Podemos utilizar $ciudad aquí porque
    // estamos dentro de la misma función.
}

mostrarDatos();

// Fuera de la función no podemos acceder a $ciudad.
// Si intentamos usarla, PHP indicará que no está definida.


// ==========================================
// 3. ACCEDER A VARIABLES GLOBALES
// ==========================================

function saludar() {

    // La palabra global permite utilizar
    // variables creadas fuera de la función.
    global $nombre, $edad;

    echo "<h3>Variables globales</h3>";

    echo "Hola, " . $nombre . "<br>";
    echo "Tu edad es: " . $edad . " años<br>";
}

saludar();


// ==========================================
// 4. VARIABLE ESTÁTICA
// ==========================================

function contador() {

    // static conserva el valor de la variable
    // entre una llamada y la siguiente.
    static $numero = 0;

    // Aumentamos el valor en uno cada vez
    // que se ejecuta la función.
    $numero++;

    echo "La función se ha ejecutado "
         . $numero . " veces.<br>";
}

echo "<h3>Variables estáticas</h3>";

// Llamamos a la función tres veces.
// El valor no vuelve a cero en cada llamada.
contador(); // Muestra 1
contador(); // Muestra 2
contador(); // Muestra 3

?>
