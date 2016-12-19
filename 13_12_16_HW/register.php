<?php
if ($_POST){
	$string = serialize($_POST);
	echo $string . "<br>";
	var_dump($_POST);
}


