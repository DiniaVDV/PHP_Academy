<?php
/*
1)Даны два файлы со словами, разделенными пробелами. Создать новый файл, содержащий: а) строки, которые встречаются только в первом файле; б) строки, которые встречаются в обоих файлах; в) строки, которые встречаются в каждом файле более двух раз.
*/


function fileToArray($file){
	if(file_exists($file)){
		$openFile = file_get_contents($file);
		$fileToArray = explode(' ', $openFile);
		return $fileToArray;
	}else die ("File not found!");
}

//
function putStrFirstToThird($arrayFirstFile, $arraySecondFile){
	$thirstFile = "thirdFile_1.txt";
	$i = 0;
	$arrayThirstFile = [];
	foreach($arrayFirstFile as $stringFirstFile){
		foreach($arraySecondFile as $stringSecondFile){
			if($stringFirstFile == $stringSecondFile){
				$arrayThirstFile[$i] = $stringFirstFile;
				$i++;
			}
		}
	}
	$arrayToFile = implode(' ', $arrayThirstFile);
	file_put_contents($thirstFile, $arrayToFile);
}

function putStrFirstAndSecondToThird($arrayFirstFile, $arraySecondFile){
	$thirstFile = "thirdFile_2.txt";
	$i = 0;
	foreach($arrayFirstFile as $stringFirstFile){
		$arrayThirstFile[$i] = $stringFirstFile;
		$i++;
	}
	foreach($arraySecondFile as $stringSecondFile){
		$arrayThirstFile[$i] = $stringSecondFile;
		$i++;
	}

	$arrayToFile = implode(' ', $arrayThirstFile);
	file_put_contents($thirstFile, $arrayToFile);
}

function putDoubleStrToThird($arrayFirstFile, $arraySecondFile){
	$thirstFile = "thirdFile_3.txt";
	$arrayThirstFile = array_merge(checkDoubleStrInArray($arrayFirstFile), checkDoubleStrInArray($arraySecondFile));
	$arrayToFile = implode(' ', $arrayThirstFile);
	file_put_contents($thirstFile, $arrayToFile);
}

function checkDoubleStrInArray($array){
	$i = 0;
	foreach($array as $key1 => $element1){
		$j = 0;
		foreach($array as $key2 => $element2){
			if(!($key1 == $key2)){
				if($element1 == $element2){
					$j++;
					if($j = 2){
						$array[$key1] = $i + 1; 
						$arrayWithDoubleStr[$i] = $element2;
						$i++;
						$j = 0;
						break;
					}
				}
			}
		}
	}
	return $arrayWithDoubleStr;
}

$firstFile = "firstFile.txt";
$secondFile = "secondFile.txt";

$arrayFirstFile = fileToArray($firstFile);
$arraySecondFile = fileToArray($secondFile) ;

putStrFirstToThird($arrayFirstFile, $arraySecondFile);

putStrFirstAndSecondToThird($arrayFirstFile, $arraySecondFile);

putDoubleStrToThird($arrayFirstFile, $arraySecondFile);
