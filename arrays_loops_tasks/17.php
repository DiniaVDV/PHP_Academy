<?php

/* 
17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, 
а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
*/

$monthes = [
	'January', 
	'February', 
	'March', 
	'April', 
	'May', 
	'June', 
	'July', 
	'Auguste', 
	'September',
	'October',
	'November',
	'December'
];

$month = "December";

foreach ($monthes as $elem){
	if ($elem == $month){
		echo "<b>" . $elem . "</b> <br>";
	}else echo $elem . "<br>";
}


