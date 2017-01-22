<?php
/*
8)Счетчик посещений: Присвоить переменной $access имя файла, в котором будет храниться значение счетчика.
Использовать функцию filе( ) для чтения содержимого $access в массив $visits. 
Присвоить переменной $current_visitors значение первого (и единственного) элемента массива $visits.
Увеличить значение $current_visitors на 1.
Открыть файл $access для записи и установить указатель текущей позиции в начало файла.
Записать значение $current_visitors в файл $access.
Закрыть манипулятор, ссылающийся на файл $access.
*/

$access = "C:/xampp/htdocs/PHP_Academy/17_01_17/8/countaccess.txt";

if(!is_file($access)){
	touch($access);
}

$visit = file($access);

if($visit  == null){
	$visit = 0;
};

$current_visitors = $visit[0];
$current_visitors += 1;

$openFile = fopen($access, 'w');
fwrite($openFile, $current_visitors);
fclose($openFile);

