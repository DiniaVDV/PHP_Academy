<?php

/*
13) Напишите функцию, которая находит разницу между двумя датами: количество лет, месяцев, дней, часов, минут, секунд. Результат должен выводиться в виде массива с ключами y, m, d, h, i, s.
*/

$date1 = '21:20:32 1-2-2016';
$date2 = '2:15:20 12-12-2010';

function cDate($date1, $date2){
	$dif_arr = [
		'y' => ' ',
		'm' => ' ',
		'd' => ' ',
		'h' => ' ',
		'i' => ' ',
		's' => ' ',
	]; 
	$symbols = ['-', ':', ' '];
	//Перевод дати 1 в секунды
	$date1 =  str_replace( $symbols , ',', $date1);
	$arrayDate1 = explode( ',', ($date1));
	$secondsDate1 = mktime($arrayDate1[0],$arrayDate1[1],$arrayDate1[2],$arrayDate1[3],$arrayDate1[4],$arrayDate1[5]);
	//Перевод дати 2 в секунды
	$date2 =  str_replace( $symbols , ',', $date2);
	$arrayDate2 = explode( ',', ($date2));
	$secondsDate2 = mktime($arrayDate2[0],$arrayDate2[1],$arrayDate2[2],$arrayDate2[3],$arrayDate2[4],$arrayDate2[5]);
	
	//Разница между датами в скундах
	
	$diffDate = $secondsDate1  - $secondsDate2;
	return $secondsDate1;
	die();
	$dif_arr['y'] = round($diffDate/31536000);
	$ostatoc = $diffDate - ($dif_arr['y']*31536000);
	$dif_arr['m'] = round($ostatoc/2627942.4);
	$ostatoc = abs($ostatoc - ($dif_arr['m']*2627942.4));
	$dif_arr['d'] = round($ostatoc/86400);
	$ostatoc = abs($ostatoc - ($dif_arr['d']*86400));
	$dif_arr['h'] = round($ostatoc/3600);
	$ostatoc = abs($ostatoc - ($dif_arr['h']*3600));
	
	return $dif_arr['h'];
	
	

}	

var_dump(cDate($date1, $date2));

