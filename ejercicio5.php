<?php
function isHappy($n) {
    $seen = [];
    
    while ($n != 1 && !isset($seen[$n])) {
        $seen[$n] = true;
        $n = sumOfSquares($n);
    }
    
    return $n == 1;
}

function sumOfSquares($n) {
    $sum = 0;
    
    while ($n > 0) {
        $digit = $n % 10;
        $sum += $digit * $digit;
        $n = intval($n / 10);
    }
    
    return $sum;
}

$n = 19;
echo isHappy($n) ? "true" : "false";
?>

