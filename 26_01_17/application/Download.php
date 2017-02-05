<?php

$articleName = $_POST['filename'] . '.txt';

$path = "../data/content/" . $articleName;

if(file_exists($path )){
	header('Content-Desrciption: File Transfer');
	header('Content-Type: image/jpeg');
	header('Content-Disposition: attachment; filename="'.basename($path)."'");
	header('Content-Length:' . filesize($path));
	readfile($path);
	exit;
}else {
	echo "File isn`t exit";			
}
