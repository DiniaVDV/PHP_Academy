<?php
//3)Дан файл со словами. Упорядочить слова по алфавиту.

$file = ("File.txt");
$openFile = explode(' ', file_get_contents($file));
sort($openFile);

$newFile = "newFile.txt";

$strToArray = implode(' ', $openFile);

file_put_contents($newFile, $strToArray);
die();

