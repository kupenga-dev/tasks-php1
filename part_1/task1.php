<!-- 1.Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N. -->
<?php
$N = 237821472;
$kolvoNumbers = 0;
while($N > 0) {
    $res = $N % 10;
    $N = floor($N / 10);
    if ($res < 5)
    {
        $kolvoNumbers++;
    }
}
echo $kolvoNumbers;
?>