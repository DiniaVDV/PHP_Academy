<?php
/*
11) Реализовать функцию closeToTen. функцию должна выводить на экран ближайшее к 10 из двух чисел, записанных в аргументах метода.
*/


function closeToTen($firstNum, $secondNum){
	$checkNum = 10;
	$fCheck =abs( $checkNum - $firstNum);
	$sCheck =abs( $checkNum - $secondNum);
	if($fCheck < $sCheck){
		return $firstNum;
	}else return $secondNum;
}
$firstNum = 9;
$secondNum = 11;
$num = closeToTen($firstNum, $secondNum);
 echo "Ближайшее к 10 из {$firstNum} и {$secondNum} - " . $num;

