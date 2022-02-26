<?php

function arithmetic_mean($mas, $i = 0, $sum = 0) {
    $sum += $mas[$i];
    if($i < count($mas)) 
      return arithmetic_mean($mas, $i + 1, $sum);
    return $sum / $i;
}

$mas = [1, 2, 3, 4, 5, 6, 7];
echo arithmetic_mean($mas), "\n<br>";

function Sum($x, $sum = 0) {
  $sum += $x;
  if($x >= 1) 
    return recurSum($x - 1, $sum);
  return $sum;
}

echo Sum(100), "\n<br>";

function sqrtmas($mas, $i = 0, $mas2 = []) {
  $x = sqrt($mas[$i]);
  array_push($mas2, $x);
  if($i < count($mas) - 1) 
    return sqrtmas($mas, $i + 1, $mas2);
  return $mas2;
}

$mas = [1, 4, 9, 16, 25, 36, 49];
$mas2 = sqrtmas($mas);
for ($i = 0; $i < count($mas2); $i++) {
  echo $mas2[$i], " ";
}

echo "\n<br>";

$str = '1234567890';
$mas = str_split($str, 2);
$sum = array_sum($mas);

echo $sum;