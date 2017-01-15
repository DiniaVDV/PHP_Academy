<?php
/*
4) Написать программу, выводящую на экран свой собственный код. Использовать функции чтения файла нельзя.
*/

function showFunction(){
	$w="'";
	$b=br();
	$str='function showFunction(){$w="";$b=br();$str=;print (substr($str,0,24).$b.substr($str,24,4).$w.substr($str,28,2).$b.substr($str,30,8).$b.substr($str,38,5).$w.$str.$w.$b.substr($str,44,166).$b.substr($str,210,1));}';
	print (substr($str,0,24).$b.substr($str,24,4).$w.substr($str,28,2).$b.substr($str,30,8).$b.substr($str,38,5).$w.$str.$w.$b.substr($str,44,166).$b.substr($str,210,1));
}
function br(){
	return '<br>';
}
showFunction();





