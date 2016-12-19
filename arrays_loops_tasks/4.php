<?php

/* 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, 
с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); 
*/

$arr = [
	'green' => 'зеленый',
	'red' => 'красный',
	'blue' => 'голубой'
];


echo "Ключи:<br>";
foreach ($arr as $key => $elem){
	echo $key . "<br>";
}
echo "Элементы:<br>";
foreach ($arr as $elem){
	echo $elem . "<br>";
}