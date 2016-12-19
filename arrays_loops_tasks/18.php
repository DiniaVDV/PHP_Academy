<?php

/* 
18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, 
выходные дни следует вывести жирным.
*/

$week_days = [
	'Monday', 
	'Tuesday', 
	'Wednesday', 
	'Thursday', 
	'Friday', 
	'Saturdayrday', 
	'Sunday'
];


foreach ($week_days as $elem){
	if ($elem == 'Saturdayrday' || $elem == 'Sunday' ){
		echo "<b>" . $elem . "</b> <br>";
	}else echo $elem . "<br>";
}


