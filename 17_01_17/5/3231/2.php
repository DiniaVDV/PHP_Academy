<?php

/*
2) Напишите функцию, которая возвращает куб числа. Число передается параметром.
*/
$a = 6;

function cube ($i){
	$res = $i * $i * $i;
	return $res;
}

echo "Куб числа {$a} = " . cube($a);