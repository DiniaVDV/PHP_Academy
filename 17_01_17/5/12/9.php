<?php

/*
9) Напишите функцию, которая принимает параметром массив, а возвращает четные элементы этого массива.
*/
$arr = [
	'a', 
	'b', 
	'c', 
	'd', 
	'e'
];

function myFunc($array){
	$i = 0;
	$array1 = [];
	foreach($array as $key => $elem){
		if ($key%2 == 0){
			$array1[$i] = $elem;
			$i++;
		}
	}
	return $array1;
}

print_r (myFunc($arr));
