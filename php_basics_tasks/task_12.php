<?php

/*
9. Создайте переменную day и присвойте ей произвольное числовое значение.

10. С помощью конструкции switch выведите фразу: "Это рабочий день", 
если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).

11. С помощью конструкции switch выведите фразу: "Это выходной день", 
если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).

12. С помощью конструкции switch выведите фразу: "Неизвестный день", 
если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).
*/

$day = 8;

switch($day){
	case 1:
		echo "Это рабочий день";
		break;
	case 2:
		echo "Это рабочий день";
		break;
	case 3:
		echo "Это рабочий день";
		break;
	case 4:
		echo "Это рабочий день";
		break;
	case 5:
		echo "Это рабочий день";
		break;
	case 6:
		echo "Это выходной день ;)";
		break;
	case 7:
		echo "Это выходной день ;)";
		break;
	default:
		echo "Неизвестный день!";
}