<!-- 17.Найти наибольший общий делитель (НОД) двух натуральных чисел N и M. -->
<?php

function NOD($a, $b)
{
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $a + $b;
}

$N = 18;
$M = 30;

echo (NOD($N, $M));

?>