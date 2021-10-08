<!-- 4. В  массиве  А(N)  найти  количество  пар  одинаковых  соседних элементов.   -->
<?php

require_once "functions.php";
$A = [];
$count = 0;
$N = 7;
for ($i = 0; $i < $N; $i++) {
    $A[$i] = rand(0, 1);
    if ($i > 0 && $A[$i] == $A[$i - 1]) {
        $count++;
    }
}
pr($A);
echo $count;

?>