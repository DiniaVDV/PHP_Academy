<?php
/*
8) Напишите функцию, которая находит длину гипотенузы прямоугольного треугольника
*/


function gipotenuza($kat1, $kat2){
	$kvad_gipot = pow($kat1, 2) + pow($kat2, 2);
	$gipot = pow($kvad_gipot, 0.5);
	return $gipot;
}

$kat1 = 5; 
$kat2 = 5;


 echo gipotenuza($kat1, $kat2);

