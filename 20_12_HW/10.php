<?php

/*
10) Напишите функцию, которая принимает параметром строку, а возвращает первые N символов этой строки (N – это второй параметр). Функция должна добавлять троеточие в конце возвращаемой строки. Функция должна корректно работать с кириллицей.
*/


$str = "ылвадлыввд авывп";
$N = 3;

function myFunc($str, $N){
	$str1 = iconv_substr($str, 0, $N);
	$str1 .= "...";
	return ($str1);
}

print_r (myFunc($str, $N));

/*function myFunc($str, $N){
	$i = 0;
	$array1 = [];
	$arrStr = str_split($str);
	return ($arrStr);
	die();
	foreach($arrStr as $key => $elem){
		if ($key < $N){
			$array1[$i] = $elem;
			$i++;
		}
	}
	return var_dump($array1);
	die();
	$res_str = implode('', $array1) . "...";
	return $res_str;
}

print_r (myFunc($str, $N));*/

