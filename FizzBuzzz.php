<?php
function fizzBuzz($n) {
    // Creamos un array vacío para acumular las respuestas 
    $respuesta = [];
    
    // Iniciamos el for para correr el ejercicio
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $respuesta[] = "FizzBuzz";
        } elseif ($i % 3 === 0) {
            $respuesta[] = "Fizz";
        } elseif ($i % 5 === 0) {
            $respuesta[] = "Buzz";
        } else {
            $respuesta[] = strval($i);
        }
    }
    return $respuesta; 
}


$n1 = 3;
print_r(fizzBuzz($n1));
$n2 = 5;
print_r(fizzBuzz($n2));
$n3 = 15;
print_r(fizzBuzz($n3));
?>