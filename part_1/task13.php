<!-- 13. Определить, является ли число  2n  m  симметричным, т. е. запись  числа содержит четное
количество цифр и совпадают его левая и правая  половинки.-->
<?php
$N = 1234554321;
$firstNumber = $N;
$secondNumber = 0;
if (fmod(floor(log10($N) + 1), 2) == 0) {
    while ($firstNumber > 0) {
        $secondNumber = $secondNumber * 10 + $firstNumber % 10;
        $firstNumber = floor($firstNumber / 10);
    }
    if ($secondNumber == $N) {
        echo "Данное число симметрично";
    }
}

?>