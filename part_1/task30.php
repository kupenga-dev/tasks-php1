<!-- 30.Найти среди натуральных чисел n, n+1,...,2n1 числа-близнецы, т. е. два таких простых числа, разность между которыми равна двум.   -->
<?php

function isPrime($number)
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $i = 3;
    $limit = (int) sqrt($number);
    while ($i <= $limit) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}
$k = 1;
$count = 0;
$N = 3000;
while ($N > 0) {
    if (isPrime($k) && isPrime($k + 2)) {
        echo ($k) . "  ";
        echo ($k + 2);
        echo "<pre>";
    }
    $N -= 2;
    $k += 2;
}

?>