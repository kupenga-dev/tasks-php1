<!-- 11.Напечатать те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.-->
<?php

function isElement($n)
{
    $sum = 0;
    $n2 = $n;
    while ($n2 > 0) {
        $number = $n2 % 10;
        $sum += $number;
        $n2 = floor($n2 / 10);
    }
    if (fmod($n, $sum) == 0) {
        return true;
    } else {
        return false;
    }
}

$N = 300;
for ($i = 0; $i < $N; $i++) {
    if (isElement($i)) {
        echo $i;
    }
}
?>