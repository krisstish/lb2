<?php

$a = 10;
$b = 3;

echo $a % $b;
echo "\n<br>";

if ($a % $b) {
	echo "Делится: ";
	echo $a / $b;
	echo "\n<br>";
}
else {
	echo "Делится с остатком: ";
	echo $a % $b;
	echo "\n<br>";
}

$st = pow(2, 10);

echo $st, "\n<br>";
echo sqrt(245), "\n<br>";

$mas = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;

foreach ($mas as $n) {
	$sum += $n;
}

echo sqrt($sum), "\n<br>";
echo round(sqrt(379)), "\n<br>";
echo round(sqrt(379),1), "\n<br>";
echo round(sqrt(379),2), "\n<br>";


$mas2 = [("floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];

echo $mas2["floor"], " ", $mas2["ceil"], "\n<br>";


$mas3 = [4, -2, 5, 19, -130, 0, 10];

echo min($mas3), " ", max($mas3), "\n<br>";
echo rand(1, 100), "\n<br>";

$mas4 = [];
for ($i = 1; $i <= 10; $i++) 
{
    $mas4[$i] = rand(1, 100);
    echo $mas4[$i], " ";
}

echo "\n<br>";
echo abs($a-$b), "\n<br>";

$mas5 = [1, 2, -1, -2, 3, -3]
for ($i = 0; $i < count($mas5); $i++) {
	$mas5[$i] = abs($mas5[$i]);
	echo $mas5[$i], " ";
}

echo "\n<br>";

$d = 30;
$e = 0;
$f = 0;
$mas6 = [];
while ($e < $f) {
	$e++;
	if($x % $k == 0) {
		$mas6[$f] = $e;
		$i++;
	}
}

for ($k = 0; $j < $f; $k++)
{
	echo $mas6[$f], " ";
}

echo "\n<br>";

$mas7 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
for ($i = 0; $sum <= 10; $i++) {
	$sum += $mas7[$i];
}

echo $i;