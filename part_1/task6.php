<!-- 6.Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7. -->
<?php
require_once "functions.php";
for ($i = 1000; $i < 10000; $i++) {
    $number = $i;
    $flag = true;
    while ($number > 0)
    {
        $firstNumber = $number % 10;
        $number = floor($number / 10);
        if ($firstNumber === 1 || $firstNumber === 4 || $firstNumber === 5 || $firstNumber === 6 || $firstNumber === 8 || $firstNumber === 9)
        {
            $flag = false;
            break;
        }
    }
    if ($flag)
    {
        pr($i);
    }
    
}

?>