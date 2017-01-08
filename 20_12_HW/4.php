<?php

/*
4) Напишите аналог функции count (аналог - это значит можно пользоваться чем угодно, кроме функции count).
*/

$arr = [
	'a', 
	'b', 
	'c', 
	'd', 
	'e'
];

function imCount ($arrayIn){
	$i = 0;
	foreach($arrayIn as $elem){
		$i++;
	}
	return $i;
}

echo imCount($arr);
