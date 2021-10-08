<!-- 5. В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами. -->
<?php
require_once "functions.php";
$A = [];
$indexMax = 0;
$indexMin = 0;
$N = 7;

function swap($A, $indexMin, $indexMax)
{
    if ($indexMin >= 0 && $indexMax >= 0) {
        $B = [];
        $B[0] = $A[$indexMin];
        $A[$indexMin] = $A[$indexMax];
        $A[$indexMax] = $B[0];
    }
    return $A;
}

for ($i = 0; $i < $N; $i++) {
    $A[$i] = rand(-100, 100);
    if ($i === 0) {
        $max = $A[$i];
        $min = $A[$i];
    }
    if ($A[$i] > $max) {
        $max = $A[$i];
        $indexMax = $i;
    }
    if ($A[$i] < $min) {
        $min = $A[$i];
        $indexMin = $i;
    }
}
pr($A);
pr(swap($A, $indexMin, $indexMax));
?>