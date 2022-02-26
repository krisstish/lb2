<?php

function arrayFill(string $str, int $n) {
    $mas = [];
    for ($i = 0; $i < $n; $i++)
      $mas[] = $str; 
    return $mas;
}

$n = 5;
$mas = ["x"];
for ($i = 1; $i < $n; $i++)
    $mas[$i] = $mas[$i - 1] . "x";
foreach ($mas as $i)
    echo $i , " ";
echo "\n<br>";

foreach (arrayFill("x", 5) as $i)
    echo $i , " ";
echo "\n<br>";

$mas2 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($mas2 as $i)
    $sum += array_sum($i);
echo $sum, "\n<br>";

$mas3 = [];
$k = 1;
for ($i = 0; $i < 3; $i++) {
    $m = [];
    for ($j = 0; $j < 3; $j++) {
        $m[] = $k;
        $k++;
    }
    $mas[] = $m;
    foreach ($m as $y)
      echo $y , " ";
    echo "\n<br>";
}

$mas4 = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result, "\n<br>";

$user =["name" => "Christina", "surname" => "Shukina", "patronymic" => "Sergeevna"];
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "\n<br>";

$today = getdate();
$date = ['year' => $today['year'], 'month' => $today['mon'], 'day' => $today['mday']];
echo $date['year'], "-", $date['month'], "-", $date['day'], "\n<br>";

$mas5 = ['a', 'b', 'c', 'd', 'e'];
echo count($mas5), "\n<br>";
echo $mas5[count($mas5)-1], "\n<br>";
echo $mas5[count($mas5)-2], "\n<br>";