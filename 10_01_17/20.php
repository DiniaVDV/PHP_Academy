<?php
/*
20) Используя аргумент функции -  целое число в диапазоне 1 - 999. Вывести его строку-описание следующего вида:
«четное однозначное число» - если число четное и имеет одну цифру,
«нечетное однозначное число» - если число нечетное и имеет одну цифру,
«четное двузначное число» - если число четное и имеет две цифры,
«нечетное двузначное число» - если число нечетное и имеет две цифры,
«четное трехзначное число» - если число четное и имеет три цифры,
«нечетное трехзначное число» - если число нечетное и имеет три цифры.
Если введенное число не попадает в диапазон 1 - 999, в таком случае ничего не выводить на экран.


*/


function somefun($number){
	$arr =[
		'1' => 'однозначное',
		'2' => 'двузначное',
		'3' => 'трехзначное',
	];
	if($number >= 1 && $number <= 999){
		$i = 0;
		$str = $number;
		$amountNumb = str_split( $str);
		foreach($amountNumb as $elment){
			$i++;
		}

		if(($number % 2) == 0){
			
			return "четное {$arr[$i]} число";
			
		} else	return "нечетное {$arr[$i]} число";
			
	
	}
}

$number = 200;

echo somefun($number);

