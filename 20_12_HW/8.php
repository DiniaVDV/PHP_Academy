<?php

/*
8) Напишите функцию, которая принимает год, а возвращает високосный это год или нет. При решении не используйте функцию date.
*/
$v_year =2016;
$year = 1992;

function checkYear($year, $v_year){
	if(abs($v_year - $year)%4 == 0){
		echo "Этот год високосный";
	} else echo "Этот год не високосный";
}

echo checkYear($year, $v_year);
