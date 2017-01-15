<?php
/*

14) Работа светофора для пешеходов запрограммирована следующим образом: в начале каждого часа в течение трех минут горит зеленый сигнал, затем в течение одной минуты — желтый, а потом в течение одной минуты — красный, затем опять зеленый горит три минуты и т. д.
Используя аргумент функции - вещественное число t, означающее время в минутах, прошедшее с начала очередного часа.
Определить, сигнал какого цвета горит для пешеходов в этот момент.

*/


function trafficLights($t){
	if ($t > 0 && $t <= 59){
		while ($t >= 5){
			$t -= 5;
		}

		if($t >= 0 && $t <3){
			
			echo 'Зеленый';
			
		} elseif($t >= 3 && $t <4){
			
			echo 'Желтый';
			
		} elseif($t >= 4 && $t <5){
			
			echo 'Красный';
		} 
	} else echo "Введите корректное время(от 0 до 59 минут).";

}

$t = 55;
trafficLights($t);


