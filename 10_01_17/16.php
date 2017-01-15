<?php
/*

16) используя аргументы функции -  три целых числа, определить, имеется ли среди них хотя бы одна пара равных между собой чисел.
Если такая пара существует, вывести на экран числа через пробел. Если все три числа равны между собой, то вывести все три.

*/


function somefun($fis, $sec, $thir){
	if($fis == $sec){
		$str = "{$fis} {$sec}";
		if($fis == $thir){
			$str .= " {$thir}";
			return $str;
		} else return $str;
	}
	if($fis == $thir){
		$str = "{$fis} {$thir}";
		return $str;
	}
	if($thir == $sec){
		$str = "{$sec} {$thir}";
		return $str;
	}
}

$fis = 12;
$sec = 10;
$thir = 12; 

echo (somefun($fis, $sec, $thir));


