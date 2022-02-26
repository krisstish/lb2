<?php

function printStringReturnNumber()
{
	echo "Hi!", "\n<br>";
	return 7;
}

$my_num = printStringReturnNumber();

echo $my_num;