<?php
/*
5)Написать функцию, которая будет показывать список всех файлов в данной папке (поиск файлов происходит и во всех вложенных уровнях).
*/
function scanDi($dir){
	$result = [];
	$symb = [".",".."];
	$cdDir = scandir($dir);

	foreach($cdDir as $key => $elem){
		if(!in_array($elem, $symb)){
			if(is_dir($dir . DIRECTORY_SEPARATOR . $elem)){
				$result[$elem] = scanDi($dir. DIRECTORY_SEPARATOR . $elem);
			}else{
				$result[] = $elem;
			}
		}
	}
	return $result;
}

$dir = "C:/xampp/htdocs/PHP_Academy/17_01_17/5/";

print_r(scanDi($dir));
