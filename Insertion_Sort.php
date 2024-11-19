<?php
function insertionSort1($n, $arr) {
    $value = $arr[$n - 1]; // ultimo elemento desordenado
    $i = $n - 2;

    // bucle para comparar y desplazar elementos
    while ($i >= 0 && $arr[$i] > $value) {
        $arr[$i + 1] = $arr[$i]; // ddesplaza el elemento a la derecha
        echo implode(" ", $arr) . "<br>|"; // imprime el estado actual
        $i--;
    }

    // inserta el valor en la posicoin correcta
    $arr[$i + 1] = $value;
    echo implode(" ", $arr) . "<br>"; // imprime el estado final del arreglo 
}

//jemplo de uso
$n = 5;
$arr = [2, 4, 6, 8, 3];
insertionSort1($n, $arr);

