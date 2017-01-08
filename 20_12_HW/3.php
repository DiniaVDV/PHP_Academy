<?php

/*
3) Напишите функцию, которая отнимает от первого числа второе и делит на третье.
*/
$a = 25;
$b = 10;
$c = 3;

function someFunc ($x, $y, $z){
	$res = ($x - $y) / $z;
	return $res;
}

echo someFunc($a, $b, $c);
