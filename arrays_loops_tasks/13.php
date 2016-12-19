<?php

/* 
13. Вывести таблицу умножения
*/
$i=1;
$j=1;
while ($i<=9){
	
	while($j<=9){
		$res = $i * $j;
		echo "{$i} x {$j} = {$res}<br>";
		$j++;
	}
	$j = 1;
	$i++;
	echo "<br>";
}


for ($i=1;$i<=9;$i++){
	
	for($j=1;$j<=9;$j++){
		$res = $i * $j;
		echo "{$i} x {$j} = {$res}<br>";
	}
	echo "<br>";
}
