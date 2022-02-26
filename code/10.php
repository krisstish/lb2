<?php

function sum($a, $b) {
  if ($a + $b > 10) 
    return true;
  return false;
}
  
function equal($a, $b) {
  if($a == $b) return true;
  return false;
}
  
$test = 0;
if (!$test) echo 'верно';

echo "\n<br>"

function fage($age) {
  if($age < 10 || $age > 99) {
    echo "Error";
    return;
  }
  else {
    $sum = 0;
    while($age > 0) {
        $sum += $age % 10;
        $age = floor($age / 10);
    }
    if($sum <= 9) echo "сумма цифр однозначна";
    else echo "сумма цифр двузначна";
  }
  return;
}

function quantity($arr) {
  if (count($arr) == 3) {
    $sum = 0;
    for($i = 0; $i < 3; $i++) 
      $sum += $arr[$i];
    echo $sum, "\n<br>";
  }
  return;
}