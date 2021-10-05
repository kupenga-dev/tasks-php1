<!-- 29.Для  каждого  числа  заданной  последовательности  натуральных   чисел   n0 ,n1,...,nm установить,  можно  ли  вычеркнуть  в  нем  некоторые  цифры, чтобы сумма оставшихся равнялась
заданному числу к.   -->
<?php

function Analysis($number, $k)
{
    $sum = 0;
    $secondNumber = $number;
    $count = floor(log10($number));

    while ($secondNumber > 0) {
        $digit = $secondNumber % 10;
        $secondNumber = floor($secondNumber / 10);
        $sum += $digit;
    }
    if ($sum < $k) {
        return false;
    }
    if ($sum == $k) {
        $secondNumber = $number;
        while ($secondNumber > 0) {
            $digit = $secondNumber % 10;
            if ($digit == 0) {
                return true;
            }
            $secondNumber = floor($secondNumber / 10);
        }
        return false;
    }
    if ($sum > $k) {
        $secondNumber = $number;
        while ($number > 0) {
            $digit = $number % 10;
            if ($sum - $digit == $k) {
                return true;
            }

            while ($secondNumber > 0) {
                $digit2 = $secondNumber % 10;
                if ($sum - ($digit + $digit2) == $k) {
                    return true;
                }
                $secondNumber = floor($secondNumber / 10);
            }
            $number = floor($number / 10);
        }
    }
}

$k = 5;
$n = 100;
$m = 1500;

for ($i = $n; $i < $m; $i++) {
    if (Analysis($i, $k)) {
        echo $i . "  Можно";
        echo "<pre>";
    } else {
        continue;
    }
}

?>