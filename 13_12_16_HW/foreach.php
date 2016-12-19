<?php

$arr = [
	20,
	30,
	45,
	22,
	36,
	65,
	48,
	75,
	49,
];

foreach ($arr as $number){
	if($number%3==0){
		echo "{$number}" . "<br>";
	}
	
}

