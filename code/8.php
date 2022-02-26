<?php

function increaseEnthusiasm(string $str) {
    $str .= "!";
    return $str;
}

$str = "Hi";
$k = increaseEnthusiasm($str);
echo $k, "\n<br>";

function repeatThreeTimes($str) {
    for($i = 0; $i < 3; $i++) {
        echo $str, " ";
    }
}
echo repeatThreeTimes($str), "\n<br>";

function cut($str, $ch = 10) {
    if (strlen($str) < $ch) return $str;
    for ($i = 0; $i < $ch; $i++) {
        $res_str = $res_str.$str[$i];
    }
    return $res_str;
}
echo cut ("Hi",4); echo "<br>";

function printArray ($array, $i = 0) {
    if ($i < count($array)) {
         echo $array[$i] , " ";
        printArray($array,$i+1);
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7];
printArray($arr); echo "<br>";

function printDigit($number) {
    $k = 0;
    while ($number > 0) {
        $k += $number % 10;
        $number = floor($number /10);
    }
    if ($k < 10) return $k;
    else return printDigit($rk);
}

echo printDigit(13);