<!-- 28.Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm так,
чтобы цифры каждого числа образовывали максимально возможные числа.  -->
<?php

function Max_number($s)
{
    $countS = floor(log10($s) + 1);
    $sortedS = 0;

    for ($i = 9; $i > 0; $i--) {
        $temp = $s;
        while ($temp != 0) {
            $number = $temp % 10;
            if ($number == $i) {
                $sortedS *= 10;
                $sortedS += $number;
            }
            $temp /= 10;
        }
    }
    if (floor(log10($sortedS) + 1) != $countS)
    {
        $pow = abs(floor(log10($sortedS) + 1) - $countS);
        $sortedS = $sortedS * (10 ** $pow);
    }
    return $sortedS;
}

$N = 100;
$M = 1000;

for ($i = $N; $i < $M; $i++) {
    $sortedNumber = Max_number($i);
    echo $i . " ";
    echo $sortedNumber;
    echo "<pre>";
}

?>