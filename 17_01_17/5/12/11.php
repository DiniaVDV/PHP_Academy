<?php

/*
11) Напишите функцию, которая принимает строку на русском языке, а возвращает ее транслит. Сделайте также функцию, которая выполняет обратную операцию.
*/

function conver_to_en($string){
	$array = [
		'a' => 'a',		'б' => 'b',		'в' => 'v',		'г' => 'g',
		'д' => 'd',		'е' => 'e',		'ё' => 'e',		'ж' => 'zh',
		'з' => 'z',		'и' => 'i',		'й' => 'y',		'к' => 'k',
		'л' => 'l',		'м' => 'm',		'н' => 'n',		'о' => 'o',		
		'п' => 'p',		'р' => 'r',		'с' => 's',		'т' => 't',
		'у' => 'u',		'ф' => 'f',		'х' => 'h',		'ц' => 'c',	
		'ч' => 'ch',	'ш' => 'sh',	'щ' => 'sch',	'ь' => '\'',
		'ы' => 'y',		'ъ' => '\'',	'э' => 'e',		'ю' => 'yu',
		'я' => 'ya',
		'А' => 'A',		'Б' => 'B',		'В' => 'V',		'Г' => 'G',
		'Д' => 'D',		'Е' => 'E',		'Ё' => 'E',		'Ж' => 'Zh',
		'З' => 'Z',		'И' => 'I',		'Й' => 'Y',		'К' => 'K',
		'Л' => 'L',		'М' => 'M',		'Н' => 'N',		'О' => 'O',		
		'П' => 'P',		'Р' => 'R',		'С' => 'S',		'Т' => 'T',
		'У' => 'U',		'Ф' => 'F',		'Ч' => 'H',		'Ц' => 'C',	
		'Ч' => 'Ch',	'Ш' => 'Sh',	'Щ' => 'Sch',	'Ь' => '\'',
		'Ы' => 'Y',		'Ъ' => '\'',	'Э' => 'E',		'Ю' => 'Yu',
		'Я' => 'Ya',	
	];
	return strtr($string, $array);
}

function conver_to_ru($string){
	$array = [
		'a' => 'а',		'b' => 'б',		'c' => 'с',		'd' => 'д',
		'e' => 'e',		'f' => 'ф',		'g' => 'г',		'i' => 'и',
		'j' => 'дж',	'k' => 'к',		'l' => 'л',		'm' => 'м', 
		'n' => 'н',		'o' => 'о',		'p' => 'п',		'q' => 'кью',		
		'r' => 'р',		's' => 'с',		't' => 'т',		'u' => 'ю',
		'v' => 'в',		'w' => 'в',		'x' => 'икс',	'y' => 'у',	
		'z' => 'з',	
		
		'A' => 'А',		'B' => 'Б',		'C' => 'С',		'D' => 'Д',
		'E' => 'Е',		'F' => 'Ф',		'G' => 'Г',		'I' => 'И',
		'J' => 'Дж',	'K' => 'К',		'L' => 'Л',		'M' => 'М', 
		'N' => 'Н',		'O' => 'О',		'P' => 'П',		'Q' => 'Кью',		
		'R' => 'Р',		'S' => 'С',		'T' => 'Т',		'U' => 'Ю',
		'V' => 'В',		'W' => 'В',		'X' => 'Икс',	'Y' => 'У',	
		'Z' => 'З',	
	];
	return strtr($string, $array);
}

$string_en = 'Extreme';
$string_ru = 'Машина';

print_r (conver_to_ru($string_en));
echo "<br>";
print_r (conver_to_en($string_ru));


/*function myFunc($str, $N){
	$str1 = iconv_substr($str, 0, $N);
	return ($str1);
}

print_r (myFunc($str, $N));*/