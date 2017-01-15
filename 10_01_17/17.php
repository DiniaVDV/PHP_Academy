<?php
/*

17) Используя аргументы функции - три целых числа. Одно из чисел отлично от двух других, равных между собой.
Вывести на экран порядковый номер числа, отличного от остальных.


*/


function somefun($fis, $sec, $thir){
	if($fis == $sec){
		return 3;
	}
	if($fis == $thir){
		return 2;
	}
	if($thir == $sec){
		return 1;
	}
}

$fis = 10;
$sec = 10;
$thir = 12; 

echo (somefun($fis, $sec, $thir));


