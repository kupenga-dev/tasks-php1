<!-- 1. В массиве  А(N)  найти: а)  число элементов, предшествующих  первому отрицательному элементу;  б) сумму нечетных элементов массива, следующих за последним отрицательным элементом.  -->
<?php

require_once "functions.php";

$A = [];
$N = 8;
$sum = 0;
$count = 0;
$cheakpoint = 0;

for ($i = 0; $i < $N; $i++) {
    $A[$i] = rand(-100, 100);
    if (fmod($A[$i], 2) != 0) {
        $sum += $A[$i];
    }
    if ($A[$i] < 0) {
        ++$cheakpoint;
        if ($cheakpoint === 1) {
            echo $i;
        }
        $sum = 0;
    }
}

pr($A);
echo $count;
echo "<pre>";
echo $sum;

?>