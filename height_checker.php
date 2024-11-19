
<?php

function heightChecker($heights) {
    // Crear una copia de heights y ordenarla
    $expected = $heights;
    sort($expected);

    $count = 0;

    // Comparar cada elemento de heights con el de expected
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] != $expected[$i]) {
            $count++;
        }
    }

    // Imprimir el resultado
    echo "Número de índices donde heights[i] != expected[i]: " . $count . "\n";
}

// Ejemplo de uso
$heights = [1, 1, 4, 2, 1, 3];
heightChecker($heights);

$heights = [5, 1, 2, 3, 4];
heightChecker($heights);

$heights = [1, 2, 3, 4, 5];
heightChecker($heights);

?>
