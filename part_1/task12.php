<!-- 12.Определить, является ли заданное целое число N простым -->
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

$N = 103553;
if (isPrime($N)) {
    echo "Заданное целое число N является простым";
}

?>