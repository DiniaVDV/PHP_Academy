<?php
/*
3) Реализовать шифрование текста путем замены букв друг другом (напр. A => B, B=>X, итд). Каждая буква может представлять только одну другую букву. Написать три функции - первая генерирует ключ в виде нового алфавита. Вторая шифрует заданный текст по заданному ключу. Третья расшифровывает заданный зашифрованный текст по заданному ключу. 
*/

$alphabet = [
	'А',	'Б',	'В',	'Г',
	'Д',	'Е',	'Ё',	'Ж',
	'З',	'И',	'Й',	'К',
	'Л',	'М',	'Н',	'О',		
	'П',	'Р',	'С',	'Т',
	'У',	'Ф',	'Ч',	'Ц',	
	'Ч',	'Ш',	'Щ',	'Ь',
	'Ы',	'Ъ',	'Э',	'Ю',
	'Я',	
];
$symbols = array(" ", "!", "?", ".", ",", ":", ":", "'", "-", "—", "<", ">");

function generationAlphabet($basicAlphabet){
	
	$newAlphabet = [];
	for ($i = 0; $i <32; $i++){
		$key = $i + 11; 
		if($key < 32){
			$newAlphabet[$i] = $basicAlphabet[$key];
		} else{
			$key -= 32 ;
			$newAlphabet[$i] = $basicAlphabet[$key];
		}
	}
	return $newAlphabet;
}


function encryptMessage($alphabet, $newAlphabet, $message, $symbols){
	$message = mb_strtoupper($message);
	$arrMessage = preg_split("//u", $message);
	$arrEncryptedMessage = [];
	$i = 0;
	foreach($arrMessage as $letterBefor){
		
		foreach($alphabet as $key => $letter){

			if($letterBefor == $letter){
				$arrEncryptedMessage[$i] = $newAlphabet[$key];
				$i++;
			}else{
				foreach($symbols as $keyS => $symb){
					if($letterBefor == $symb){
						$arrEncryptedMessage[$i] = $symbols[$keyS];
						$i++;
						break 2;
					}
				}
			}
		}
		
	}
	return $arrEncryptedMessage;
}

function deEncrypt($alphabet, $newAlphabet, $encrMessage, $symbols){
	$arrDeEncryptedMessage = [];
	$arrMessage = preg_split("//u", $encrMessage);
	$i = 0;
	foreach($arrMessage as $letterBefor){
		
		foreach($newAlphabet as $key => $letter){

			if($letterBefor == $letter){
				$arrDeEncryptedMessage[$i] = $alphabet[$key];
				$i++;
			}else{
				foreach($symbols as $keyS => $symb){
					if($letterBefor == $symb){
						$arrDeEncryptedMessage[$i] = $symbols[$keyS];
						$i++;
						break 2;
					}
				}
			}
		}
		
	}
	return $arrDeEncryptedMessage;	
	
}

$newAlphabet = generationAlphabet($alphabet);
$message = "Бонд, Джеймс Бонд";
echo ($encrMessage = implode(encryptMessage($alphabet, $newAlphabet, $message, $symbols)));
echo "<br>";
echo ($message = implode(deEncrypt($alphabet, $newAlphabet, $encrMessage, $symbols)));
