<!-- 24.Напечатать  натуральное  число  N :  а)  в  двоичной  системе  счисления;  б) в
шестнадцатеричной системе счисления. -->
<?php

$N = 36738;
echo $N;
echo "<pre>";

function Binary($s)
{
    $count = 0;
    $binary = 0;
    while ($s > 0) {
        $binary += fmod($s, 2) * (10 ** $count);
        $s = floor($s / 2);
        $count++;
    }
    return $binary;
}

function Hexadecimal($s)
{
    $array = [
        '0' => '0',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => 'A',
        '11' => 'B',
        '12' => 'C',
        '13' => 'D',
        '14' => 'E',
        '15' => 'F',
    ];
    $hexadecimal = '';
    while ($s > 0) {
        $hexadecimal = $array[$s % 16] . "$hexadecimal";
        $s = floor($s / 16);
    }
    return $hexadecimal;
}

echo number_format(Binary($N), 0, ".", "");
echo "<pre>";
echo Hexadecimal($N);

?>