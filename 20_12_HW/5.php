<?php

/*
5) Напишите функцию, которая принимает параметром число и проверяет четное оно или нет.
*/

$num = 2;

function checkNum ($n){
	if($n%2) {
		return 2;	
	} else return 1;
}

if (checkNum($num) == 1) echo "Число {$num} - четное!";
if (checkNum($num) == 2) echo "Число {$num} - нечетное!";