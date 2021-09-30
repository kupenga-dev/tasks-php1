<!-- 4.Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания. -->
<?php

for ($i = 1000; $i < 10000; $i++) {
    $number = $i;
    $number2 = $i;
    $flag1 = true;
    $flag2 = true;

    while ($number > 10) {
        $firstNumber = $number % 10;
        $number = floor($number / 10);
        $lastnumber = $number % 10;

        if ($firstNumber >= $lastnumber) {
            $flag1 = false;
            break;
        }
    }
    while ($number2 >= 10) {
        $firstNumber = $number2 % 10;
        $number2 = floor($number2 / 10);
        $lastnumber = $number2 % 10;

        if ($firstNumber <= $lastnumber) {
            $flag2 = false;
            break;
        }
    }
    if ($flag1 === true || $flag2 === true) {
        echo $i;
    }

}

?>