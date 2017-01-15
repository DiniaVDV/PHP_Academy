<?php
/*
6) Напишите функцию, которая будет находить корни квадратного уравнения.
*/


function unknownQuadraticEquation($a, $b, $c){
	 $x1 = (-$b + pow((pow($b, 2) - 4 * $a * $c), 1/2))/(2 * $a);
	 echo "x1=" . $x1 . "<br>";
	 $x2 = (-$b - pow((pow($b, 2) - 4 * $a * $c), 1/2))/(2 * $a);
	 echo "x2=" . $x2;
}
// a*x^2+b*x+c=0
$a = 2;
$b = 3;
$c = 1;

 unknownQuadraticEquation($a, $b, $c);

