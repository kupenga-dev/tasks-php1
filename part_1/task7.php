<!-- 7.Выяснить, есть ли в записи натурального числа N две одинаковые цифры. -->
<?php
require_once "functions.php";

$N = 1234567890;

function DoubleNumbers($N)
{
    if ($N > 9) {
        $number = $N % 10;
        $N2 = floor($N / 10);
        while ($N2) {
            if ($number === ($N2 % 10)) {
                return true;
            }
            $N2 = floor($N2 / 10);
        }
        return DoubleNumbers(floor($N / 10));
    } else {
        return 0;
    }
}

if (DoubleNumbers($N)) {
    echo "В этом числе есть одинаковые цифры";
}

?>