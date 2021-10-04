<!-- 26.Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей. -->
<?php

function Sum($s)
{
    $sum = 0;
    $k = 1;
    $i = 0;
    $count = 0;
    while ($i < $s) {
        if (fmod($s, $k) == 0) {
            $sum += $k;
        }
        $k++;
        $i++;
    }
    return $sum;
}

$N = 100;
$M = 1000;
$sum_max = 0;
$number = 0;

for ($i = $N; $i < $M; $i++) {

    if ($sum_max < Sum($i)) {
        $sum_max = Sum($i);
        $number = $i;
    }
}
echo $sum_max . " " . $number;

?>