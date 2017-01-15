<?php
/*
12) Реализовать функцию checkInterval. функцию должна проверять попало ли целое число в интервал от 50 до 100
*/


function checkInterval($number){
	if($number >= 50 && $number <= 100){
		echo "Число попало в интервал от 50 до 100";
	}else echo "Число не попало в интервал от 50 до 100";
}
$number = 101;
checkInterval($number);


