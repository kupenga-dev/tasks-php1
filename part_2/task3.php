<!-- 3. В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами.  -->
<?php
require_once "functions.php";
$A = [];
$index = -1;
$index2 = -1;
$N = 7;
for ($i = 0; $i < $N; $i++) {
    $A[$i] = rand(-100, 100);
    if ($A[$i] > 0 && $i == 0) {
        $index = $i;
    }
    if ($A[$i] < 0) {
        $index2 = $i;
    }
}
pr($A);
if ($index >= 0 && $index2 >= 0) {
    $B = [];
    $B[0] = $A[$index];
    $A[$index] = $A[$index2];
    $A[$index2] = $B[0];
}
pr($A);

?>