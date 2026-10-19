<?php
// Forzamos a PHP a que sea estricto con los tipos de datos (evita mezclar texto con números)
declare(strict_types=1);

/**
 * Esta función calcula el total de una factura.
 * 
 * TIENE DOS PARTES EN SUS PARÁMETROS:
 * 1. Fijos ($nombreCliente, $impuesto): Son obligatorios y van primero.
 * 2. Variable (...$productos): Recibe CUALQUIER cantidad de precios y los guarda en un array.
 */
function generarFactura(string $nombreCliente, float $impuesto, float ...$productos): string 
{
    // Pasito 1: Creamos una variable para ir sumando los precios
    $sumaProductos = 0.0;

    // Pasito 2: Como '...$productos' es un array automático, lo recorremos con un bucle
    foreach ($productos as $precioUnico) {
        $sumaProductos += $precioUnico; // Sumamos cada producto al total
    }

    // Pasito 3: Calculamos el impuesto (ej: multiplicar por 1.16 si el impuesto es 0.16)
    $totalConImpuesto = $sumaProductos * (1 + $impuesto);

    // Pasito 4: Devolvemos un texto limpio y formateado con el resultado
    return "Cliente: $nombreCliente | Total a pagar: $" . number_format($totalConImpuesto, 2);
}

// ==========================================
//             ¿CÓMO SE USA?
// ==========================================

// PRUEBA 1: El cliente Juan compra solo 2 productos (10.00 y 20.00)
// PHP asigna: 'Juan' a $nombreCliente, 0.16 a $impuesto, y [10.00, 20.00] a ...$productos
echo generarFactura('Juan Perez', 0.16, 10.00, 20.00); 
echo "\n"; // Salto de línea en consola

// PRUEBA 2: La cliente María compra 5 productos
// La función se ADAPTA automáticamente sin cambiar su código porque el final es variable
echo generarFactura('Maria Gomez', 0.16, 5.00, 12.50, 8.00, 45.00, 100.00);
