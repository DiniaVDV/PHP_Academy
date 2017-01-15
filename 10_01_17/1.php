<?php
/*
1) Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.
Исходные данные: Пройденный путь - S; Время движения - t.
Представить решение задачи с помощью одной функции.
*/



function speed($S, $t){
	$speed = [];
	$t_hour = $t / 60;    //perevod minuty -> 4as
	$t_second = $t * 60;  //perevod minuty -> secudy
	$S_metr = $S * 1000;  //perevod kilometry -> metry
	
	$speed ['speed_km_h'] = $S / $t_hour;
	$speed ['speed_m_s'] = $S_metr / $t_second;
	return $speed;	
}


$S = 100; //km
$t = 100; //minutes

$speed = speed($S, $t);

echo "Cкорость движения машины - " . $speed ['speed_km_h'] . " км/ч  или " . $speed ['speed_m_s'] . " м/c";
