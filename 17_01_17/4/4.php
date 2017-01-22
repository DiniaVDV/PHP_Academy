<?php
/*
4)Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают.
*/
function deleteElement($arrayIn, $sortKey){

	foreach($arrayIn as $key => $value){
		foreach($arrayIn as $key2 => $value2){
			if(($key < $key2) && ($value[$sortKey] == $value2[$sortKey])){
				unset($arrayIn[$key2]);
			}
		}
	}
	return $arrayIn;
}

function explodeArray($arrayOfStringsOpenFile){

	foreach($arrayOfStringsOpenFile as $key => $element){
		$arrOfWords[$key] = explode(':', $element);
	}
	return $arrOfWords;
}

function writeInFile($arrayOfResult){
	$newFile = "newFile.txt";
	foreach($arrayOfResult as $key => $value){
		$arrayOfResult[$key] = implode(":", $arrayOfResult[$key]);
	}
	file_put_contents($newFile, $arrayOfResult);
}

$arrayOfStringsOpenFile = file('File.txt');
$srotKey = 0; // 0 - удалить строки с повторами имен, 2 - удалить строки с повторами email

$arrayOfResult = deleteElement(explodeArray($arrayOfStringsOpenFile), $srotKey);
writeInFile($arrayOfResult);


