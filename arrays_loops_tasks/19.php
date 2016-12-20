<?php

/* 
19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. 
Текущий день должен храниться в переменной $day.

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
	if ($elem == date('l')){
		echo "<i>" . $elem . "</i> <br>";
	}else echo $elem . "<br>";
}

