<!-- 23.Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры следовали в порядке возрастания. -->
<?php

$N = 102140343250;
$countN = floor(log10($N) + 1);
$Nsorted = 0;

for ($i = $countN; $i > 0; $i--) {
    $temp = $N;
    while ($temp > 0) {
        $number = $temp % 10;
        if ($number == $i) {
            $Nsorted *= 10;
            $Nsorted += $number;
        }
        $temp /= 10;
    }
}
if (floor(log10($Nsorted) + 1) != $countN)
{
    $pow = abs(floor(log10($Nsorted) + 1) - $countN);
    $Nsorted = $Nsorted * (10 ** $pow);
}
echo $Nsorted;

?>