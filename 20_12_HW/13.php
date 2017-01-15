<?php

/*
13) Напишите функцию, которая находит разницу между двумя датами: количество лет, месяцев, дней, часов, минут, секунд. Результат должен выводиться в виде массива с ключами y, m, d, h, i, s.
*/

$date1 = '2015, 1, 2, 21, 20, 32';
$date2 = '2013, 9, 25, 20, 15, 20';

function cDate($date1, $date2){
	$dif_arr = [
		'y' => ' ',
		'm' => ' ',
		'd' => ' ',
		'h' => ' ',
		'i' => ' ',
		's' => ' ',
	];
	$arr1 = explode(", ", $date1);
	$arr2 = explode(", ", $date2);
	
	//Находим разницу между годами
	
	$dif_arr['y'] = $arr1[0] - $arr2[0];
	if($arr1[1] < $arr2[1]){
		$dif_arr['y'] = $dif_arr['y'] - 1;
	}
	
	//Разница между месяцами
	
	$dif_arr['m'] = r_month($arr1, $arr2);
	
	//Разница между днями
	
	$dif_arr['d'] = r_day($arr1, $arr2);	

	//Разница между часами

	$dif_arr['h'] = r_hour($arr1, $arr2);
	
	//Разница между минутами
	
	$dif_arr['i'] = r_minut($arr1, $arr2);	
	
	//Разница между секундами
	
	$dif_arr['s'] = r_seconds($arr1, $arr2);	
	
	// Результат
	
	return $dif_arr;
}

	//Разница между месяцами
	
function r_month($arr1, $arr2){
	
	if($arr1[1] >= 1 && $arr1[1] <= 12 && $arr2[1] >= 1 && $arr2[1] <= 12){
		if($arr1[1]>=$arr2[1]){
			$d_month = $arr1[1] - $arr2[1];
			return $d_month;
			} else{
				if($arr1[0]>$arr2[0]){
					$d_month = 12 + $arr1[1] - $arr2[1];
					return $d_month;
				} elseif ($arr1[0]<$arr2[0]){
					$d_month = 12 + $arr2[1] - $arr1[1];
					return $d_month;	
				} else {
					$d_month = abs ($arr1[1] - $arr2[1]);
					return $d_month;
				}
			}
			return $d_month;
	} else echo "Вы ввели некорректный месяц. Введите от 1 до 12. <br>";
}

	//Разница между днями

function r_day($arr1, $arr2){
	if($arr1[2] >= 1 && $arr1[2] <= 31 && $arr2[2] >= 1 && $arr2[2] <= 31){
		if($arr1[2]>=$arr2[2]){
			$d_day = abs ($arr1[2] - $arr2[2]);
			return $d_day; 
		} else {
			$d_day = $arr2[2] - $arr1[2];
			return $d_day; 
		}
	} else echo "Вы ввели некорректный день. Введите от 1 до 31. <br>";

}

	//Разница между часами
	
function r_hour($arr1, $arr2){
	if($arr1[3] >= 0 && $arr1[3] <= 23 && $arr2[3] >= 0 && $arr2[3] <= 23){
		$d_hour = abs ($arr1[3] - $arr2[3]);
		return $d_hour; 
	}else echo "Вы ввели некорректное время. Введите от 0 до 23. <br>";
}

	//Разница между минутами
	
function r_minut($arr1, $arr2){
	if($arr1[4] >= 0 && $arr1[4] <= 59 && $arr2[4] >= 0 && $arr2[4] <= 59){
		$d_minut = abs ($arr1[4] - $arr2[4]);
		return $d_minut;
	}else echo "Вы ввели некорректное значение минут. Введите от 0 до 59. <br>";
}

	//Разница между секундами

function r_seconds($arr1, $arr2){
	if($arr1[5] >= 0 && $arr1[5] <= 59 && $arr2[5] >= 0 && $arr2[5] <= 59){
		$d_minut = abs ($arr1[5] - $arr2[5]);
		return $d_minut;
	}else echo "Вы ввели некорректное значение секунд. Введите от 0 до 59. <br>";
}

print_r(cDate($date1, $date2));

