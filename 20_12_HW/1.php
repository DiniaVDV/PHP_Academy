<?php

/*
1) Дан массив с элементами 'a', 'b', 'c', 'd', 'e'. С помощью функции array_map сделайте из него массив 'A', 'B', 'C', 'D', 'E'.
*/

$arr = [
	'a', 
	'b', 
	'c', 
	'd', 
	'e'
];

function letterUp ($letter){
	$letterUp = mb_convert_case($letter, MB_CASE_UPPER, "UTF-8");	
	return $letterUp;
}
$arrayLetterUp = array_map("letterUp", $arr);
print_r ($arrayLetterUp);
