<?php
/*
7)Пользователь загружает текстовый файл со списком ссылок. Добавить в базу (файл на сервере) из этого файла
 только те ссылки, которых нет ни в базе, ни в файле с запрещенными ссылками.
*/

if(!empty($_POST['userfile'])){
	$fileUploade = $_POST['userfile'];
	$arrayLinksUploade = file($fileUploade);
	$forbiddenLinks = file("forbidLinks.txt");
	$database = file("database.txt");
	
	foreach($arrayLinksUploade as $key => $value){//Проверка на запрещенные ссылки
		foreach($forbiddenLinks as $valueForbid){
			if($value == $valueForbid){
				unset($arrayLinksUploade[$key]);
			}
		}
	}
	$mergeBothFile = array_merge($database, $arrayLinksUploade);

	foreach($mergeBothFile as $key => &$value){//Проверка на дублированние ссылок
		foreach($mergeBothFile as $key2 => $value2){
			if(($key < $key2) && ($value == $value2)){
				unset($mergeBothFile[$key2]);
			}
		}
		unset($value);
	}
	file_put_contents("database.txt", $mergeBothFile);
	header('Location: index.php');
} else{
	require_once ('index.php');
	echo "Файл не небрано!";
}
