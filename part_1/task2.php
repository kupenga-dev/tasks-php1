<!-- 2.Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n. -->
<?php

$n = 9;

$number = 0;
for ($i = 1000; $i <= 9999; ++$i) { 
    $number = $i;
    $sum = 0;
    while($number > 0) {
        $res = $number % 10;
        $sum += $res;
        $number = floor($number / 10);
        
    }
    if($sum === $n)
        {
            pr($i);
        }
}
?>