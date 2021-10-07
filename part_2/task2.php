<!-- 2. Дан массив А(N). Получить массив В(N), i-элемент которого равен  среднему арифметическому первых i элементов массива  А. -->
<?php
require_once "functions.php";
function AvarageElement($i, $array)
{
    $elemnt = 0;
    for ($j = 0; $j <= $i; $j++) {
        $elemnt += $array[$j];
    }
    return $elemnt / ($i + 1);
}
$A = [];
$B = [];
$N = 7;
for ($i = 0; $i < $N; $i++) {
    $A[$i] = rand(-100, 100);
    $B[$i] = AvarageElement($i, $A);
}
pr($A);
pr($B);

?>