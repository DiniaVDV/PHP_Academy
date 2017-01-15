<?php
/*
7) Напишите функцию, которая реализует алгоритм 'решето Эратосфена' для поиска простых чисел в заданном промежутке. Алгоритм найдите самостоятельно в поисковых системах.
*/


function reshetoEratosp($n){
	$tab = [];
	$tab[1] = 0;
	
	for($i = 2; $i <= $n; $i++){
		$tab[$i] = 1;
	}
	
	for($i = 2; $i * $i <= $n; $i++){
		if($tab[$i] == 1){
			for($k = $i*$i; $k <= $n; $k += $i){
				$tab[$k] = 0;
			}
		}
	}
	
	foreach($tab as $simpleNum => $key){
		if($key == 1){
		
		echo "{$simpleNum}<br>";
		}
	}
	
}

$n = 100;


 print_r(reshetoEratosp($n));

