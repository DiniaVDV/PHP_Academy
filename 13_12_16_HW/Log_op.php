<?php

//1.Вычислить значение выражения: false && true || false && true || !false && true.

$a = false && true || false && true || !false && true;

echo 'a = ';
var_dump($a);

//2. Вывести на экран true/false в зависимости от того, делиться переменная $x на 2 или нет. 
echo '<br>';
$x = 14; 

if (!($x % 2)) {
	echo 'true';
} else{
	echo 'false';
}