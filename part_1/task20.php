<!-- 20.Найти целое число в диапазоне от N до M с наибольшей суммой  делителей. -->
<?php

$N = 1;
$M = 1000;

function Sum($a)
{
    $k = 1;
    $i = 0;
    $sum = 0;
    while ($i < $a) {
        if (fmod($a, $k) == 0 && $k != $a) {
            $sum += $k;
        }
        $k++;
        $i++;
    }
    return $sum;
}
$number = 0;
$max_sum = 0;
for ($i = $N; $i < $M; $i++) {

    if ($max_sum < Sum($i)) {
        $number = $i;
        $max_sum = Sum($i);
    }
}
echo ($number);

?>