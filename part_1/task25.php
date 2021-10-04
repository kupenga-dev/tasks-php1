<!-- 25.Среди      заданной      последовательности      натуральных      чисел    n0 ,n1,...,nm найти  сумму
и  количество  тех  чисел,  которые  равны  сумме  факториалов своих цифр. -->
<?php

$N = 100;
$M = 100000;

function factorial($s)
{
    if ($s <= 0) {
        return 1;
    } else {
        return $s * factorial($s - 1);
    }
}

for ($i = $N; $i < $M; $i++) {
    $number = $i;
    $sum = 0;
    while ($number > 0) {
        $firstNumber = $number % 10;
        $sum += factorial($firstNumber);
        $number = floor($number / 10);
    }
    if ($sum == $i) {
        echo $i;
        echo "<pre>";
    }
}

?>