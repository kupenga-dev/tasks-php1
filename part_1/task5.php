<!-- 5.По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке. -->
<?php

$N = 57329889;
$M = 0;
$countNumbers = floor(log10($N));
echo $N;
while ($N > 0) {
    $firstNumber = $N % 10;
    $N = floor($N / 10);
    $M += $firstNumber * (10 ** $countNumbers);
    $countNumbers--;
}

echo $M;

?>