<?php
// REGLA DE ORO: Esta línea obliga a PHP a ser 100% estricto.
// Si no la pones, PHP intentará convertir "5" (texto) en 5 (número) automáticamente.
// Con esto activado, PHP arrojará un error inmediato si el tipo no es exacto.
declare(strict_types=1);

/**
 * Función para calcular el salario neto de un empleado.
 * 
 * EXPLICACIÓN DEL TIPADO:
 * - string $nombre   -> El primer argumento DEBE ser texto.
 * - float  $sueldo   -> El segundo argumento DEBE ser un número con decimales (o entero).
 * - int    $diasFalta -> El tercer argumento DEBE ser un número entero.
 * - : string         -> El dos puntos al final indica que la función OBLIGATORIAMENTE debe devolver un texto.
 */
function calcularSalarioNeto(string $nombre, float $sueldo, int $diasFalta): string 
{
    // Supongamos que cada día de falta resta $50.0
    $descuento = $diasFalta * 50.0;
    $salarioFinal = $sueldo - $descuento;

    // Correcto: Devolvemos un string (texto) tal como lo prometimos en el ": string" de arriba
    return "Empleado: $nombre | Salario Neto: $" . number_format($salarioFinal, 2);
}

// ==========================================
//             ¿CÓMO SE COMPORTA?
// ==========================================

// CASO 1: Uso correcto
// Enviamos un texto ('Carlos'), un float (2500.50) y un int (2).
// Todo coincide perfectamente con lo solicitado.
echo calcularSalarioNeto('Carlos Mendoza', 2500.50, 2); 
echo "\n";


// CASO 2: ¿Qué pasa si cometemos un error?
// Descomenta la línea de abajo para ver la seguridad en acción:
// echo calcularSalarioNeto('Ana Gomez', "Dos Mil", 1); 

/* 
  ERROR PRODUCIDO EN EL CASO 2:
  PHP detendrá el programa inmediatamente y lanzará un error de tipo (TypeError):
  "Argument #2 ($sueldo) must be of type float, string given..."
  
  ¡Esto salva tu código! Evita que intentes restar texto ("Dos Mil" - 50), lo cual
  en versiones antiguas de PHP habría generado un resultado impredecible o un cero.
*/
