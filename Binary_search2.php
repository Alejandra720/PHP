<?php
function busquedaBinaria($nums, $objetivo) {
    $izquierda = 0;
    $derecha = count($nums) - 1;

    while ($izquierda <= $derecha) {
        $medio = intdiv($izquierda + $derecha, 2);

        if ($nums[$medio] == $objetivo) {
            return $medio;  // Objetivo encontrado, devolver su índice
        } elseif ($nums[$medio] < $objetivo) {
            $izquierda = $medio + 1;  // Buscar en la mitad derecha
        } else {
            $derecha = $medio - 1;  // Buscar en la mitad izquierda
        }
    }

    return -1;  // Objetivo no encontrado
}

// Ejemplo de uso
$nums = [-1, 0, 3, 5, 9, 12];
$objetivo = 2;

$resultado = busquedaBinaria($nums, $objetivo);

echo $resultado;  // Salida: -1 (2 no está en el array)
?>
