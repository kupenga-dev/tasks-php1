<!-- 19.Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M. -->
<?php

function NOK($a, $b)
{
    $res = $a * $b;
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }
    return $res / ($a + $b);
}

$N = 18;
$M = 30;

echo (NOK($N, $M));

?>