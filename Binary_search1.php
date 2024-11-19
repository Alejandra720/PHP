<?php
function busquedaBinaria($nums, $objetivo) {
    $izquierda = 0;
    $derecha = count($nums) - 1;

    while ($izquierda <= $derecha) {
        $medio = intdiv($izquierda + $derecha, 2);

        if ($nums[$medio] == $objetivo) {
            return $medio;
        } elseif ($nums[$medio] < $objetivo) {
            $izquierda = $medio + 1;
        } else {
            $derecha = $medio - 1;
        }
    }

    return -1;
}

// Ejemplo de uso
$nums = [-1, 0, 3, 5, 9, 12];
$objetivo = 9;
echo busquedaBinaria($nums, $objetivo);  // Salida: 4
?>
