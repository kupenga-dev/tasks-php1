<!-- 8.Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр. -->
<?php

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

for ($i = 1000; $i < 10000; $i++) {
    if (!DoubleNumbers($i)) {
        echo $i;
    }
}

?>