<!-- 27.Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых
делителей. -->
<?php

function primSum($s)
{
    $sum = 0;
    $i = 2;
    for ($i = 2; $i <= $s; $i++) {
        if (fmod($s, $i) == 0 && $i != $s) {
            $s /= $i;
            $sum += $i;
            $i--;
        }
    }
    return $sum;
}

$N = 100;
$M = 1000;
$sum_max = 0;
$number = 0;

for ($i = $N; $i < $M; $i++) {
    if ($sum_max < primSum($i)) {
        $sum_max = primSum($i);
        $number = $i;
    }
}

echo $sum_max . " " . $number;

?>