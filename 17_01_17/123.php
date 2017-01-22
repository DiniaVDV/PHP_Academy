<?php
$string = file('data.txt');

foreach ($string as $key => $value){
   $string [$key] = explode(":", $string[$key]);
}

foreach ($string as $key => $value){      //Удаляем повторяющиееся имя и мыло
   foreach ($string as $keyTwo => $valueTwo){
       if (($key < $keyTwo) && (($value[0] == $valueTwo[0]) || ($value[2] == $valueTwo[2]))){
           unset($string[$keyTwo]);
       }
   }
}

foreach ($string as $key => $value){
   $string[$key] = implode(":", $string[$key]);
}

touch('result.txt');
file_put_contents('result.txt', $string);