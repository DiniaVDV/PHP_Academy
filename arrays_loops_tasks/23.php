<?php

/* 
23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. 
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
*/

$number = '12345';
$arr = str_split($number);
$sum = 0;

foreach ($arr as $elem){
	$sum += $elem;
}

echo "Сумма цифр - " . $sum;


