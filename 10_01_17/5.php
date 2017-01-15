<?php
/*
5) Написать функцию, определяющую является ли переданная в неее строка  палиндромом
*/



function checkPalidrom($string){
	$symbols = array(" ", "!", "?", ".", ",", ":", ":", "'", "-", "—", "<", ">");
	$string = str_replace($symbols, "", $string);
	$stringOneRegistr = mb_strtolower($string);
	$arr = preg_split("//u", $stringOneRegistr);
	$maxElem = count($arr) - 2;
	$j = $maxElem;
	for ($i = 1; $i < $maxElem; $i++){
		if($arr[$i] == $arr[$j]){
			$j--;
		}else {
			echo "Строка не является палидромом";
			break;
		}
	}
	if($i == $maxElem){
		echo "Строка является палидромом";
	}
}

$string = "Паліндром — і ні морд, ні лап";

(checkPalidrom($string));

