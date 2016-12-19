<?php

$f = true;
$i = 1;

do{
	$j = 2;
	do{
		if(($i%$j)==0) {
			$f=false;
		}
	$j++;

	} while($j<$i);

	if($f){
		echo "<br>prost={$i}<br>";
	}
	$f = true;
	$i++;
}while($i<=100);

