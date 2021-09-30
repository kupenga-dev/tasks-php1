<!-- 10.Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром.Число называется палиндромом, если его запись читается одинаково с начала и с конца. -->
<?php

function isPalidrom($N)
{
    if ($N > 10) {
        $N2 = $N;
        $palindrom = 0;
        $countNumbers = floor(log10($N));
        while ($N > 0) {
            $Number = $N % 10;
            $N = floor($N / 10);
            $palindrom += $Number * (10 ** $countNumbers);
            $countNumbers--;
        }
        if ($palindrom == $N2) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

$N = 100000;

for ($i = 0; $i < $N; $i++) {
    $i;
    if (isPalidrom($i)) {
        if (isPalidrom($i ** 2)) {
            echo $i;
        }
    }
}

?>