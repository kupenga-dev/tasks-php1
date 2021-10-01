<!-- 16.Натуральное число называют совершенным, если оно равно сумме всех своих делителей, не считая его самого. Например, 6=1+2+3.  Найти  все совершенные числа в
диапазоне от N до M. -->
<?php

function GetPerfectNumber($N)
{
    $k = 1;
    $i = 0;
    $sum = 0;
    while ($i < $N) {
        if (fmod($N, $k) == 0 && $k != $N) {
            $sum += $k;
        }
        $k++;
        $i++;
    }
    if ($sum == $N) {
        return true;
    } else {
        return false;
    }
}

$N = 1;
$M = 1000;

for ($i = $N; $i < $M; $i++) {
    if (GetPerfectNumber($i)) {
        echo $i . " ";
    }
}

?>