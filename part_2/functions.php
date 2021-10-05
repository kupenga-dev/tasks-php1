<?php
// require_once "functions.php";
function pr($s)
{
    echo "<pre>";
    print_r($s);
    echo "<pre>";
}

function GenerateRandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = mb_strlen($characters);
    $randomString = '';
    for ($i = 0; $i <= 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
