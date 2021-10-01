<!-- 14.Парными  простыми числами называются два простых числа, разность  которых равна двум.
Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел. -->
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
while ($count != 10) {
    if (isPrime($k) && isPrime($k + 2)) {
        echo ($k) . "  ";
        echo ($k + 2);
        echo "<pre>";
        $count++;
    }
    $k += 2;
}
?>