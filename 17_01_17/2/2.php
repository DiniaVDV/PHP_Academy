<?php

/*
2)Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.
*/

$firstFile = "C:/xampp/htdocs/PHP_Academy/17_01_17/2/firstFile.txt";
$secondFile = "C:/xampp/htdocs/PHP_Academy/17_01_17/2/secondFile.txt";

$arrayFirstFile = file($firstFile);
$arraySecondFile = file($secondFile);
$arrayMerg = array_unique(array_merge($arrayFirstFile, $arraySecondFile));

file_put_contents("thirdFile_1.txt", $arrayMerg);

