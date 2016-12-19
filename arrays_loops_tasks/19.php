<?php

/* 
20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

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

$day = 'Friday';

foreach ($week_days as $elem){
	if ($elem == 'Friday'){
		echo "<i>" . $elem . "</i> <br>";
	}else echo $elem . "<br>";
}


