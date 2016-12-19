<?php

/* 
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), 
найти максимальное и минимальное значение и поменять их местами.
*/

$arr = [];

for($i=1; $i<20; $i++){
	$arr[$i] = rand();
}

var_dump ($arr);

$max = max($arr);
$min = min($arr);
$max_key = 0;
$min_key = 0;
foreach ($arr as $key => $elem){
	if($elem == $max){
		$max_key = $key;
	}
	if($elem == $min){
		$min_key = $key;
	}
	
}
echo "<br>";
echo "Mинимальное число массива - " . $arr[$min_key];
echo "<br>";
echo "Максимальное число массива - " . $arr[$max_key];
echo "<br>";
$arr[$max_key] = $min;
$arr[$min_key] = $max;
echo "Массива после замены - ";
var_dump ($arr);


