<?php
/*
4)Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают.
*/


function findKey($arrayIn, $sortKey){
	

	$oldKey = null;
	$oldValue = [];
	$keyArray = [];
	$array2 = $arrayIn;
	$i=0;
	$j=0;

	foreach($arrayIn as $key => $val){
		if(array_key_exists(0, $oldValue)){			
			if($val[$sortKey] == $oldValue[($i-1)][$sortKey]){
				$keyArray[$j] = $key;
				$j++;
				$oldValue[$i] = $val;
				$i++;
			}else {
				$oldValue[$i] = $val;
				$i++;
			}
		}else{
			$oldValue[$i] = $val;

				$i++;
		}		
	}
	return $keyArray;
}

function explodeArray($arrayOfStringsOpenFile){
	$i=0;
	foreach($arrayOfStringsOpenFile as $element){
		$arrOfWords[$i] = explode(':', $element);
		$i++;
	}
	return $arrOfWords;
}

function writeInFile($arrayOfStringsOpenFile, $arrayOfKey){
	
	foreach($arrayOfStringsOpenFile as $key => $value){
		foreach($arrayOfKey as $resultKey){
			if($key == $resultKey){
				unset($arrayOfStringsOpenFile[$key]);
			}
		}
	}

	$newFile = ("C:/xampp/htdocs/PHP_Academy/17_01_17/4/newFile.txt");
	if(!is_file($newFile)){
		touch($newFile);
	}
	$openFile = fopen($newFile, "w");
	foreach($arrayOfStringsOpenFile as $key => $value){
		fwrite($openFile, $value);
	}
	fclose($openFile);
}
$file = ("C:/xampp/htdocs/PHP_Academy/17_01_17/4/File.txt");
$arrayOfStringsOpenFile = file($file);
$srotKey = 0;
array_multisort($arrayOfStringsOpenFile[$srotKey], SORT_STRING);

$arrayOfKey = findKey(explodeArray($arrayOfStringsOpenFile), $srotKey);
writeInFile($arrayOfStringsOpenFile, $arrayOfKey);


