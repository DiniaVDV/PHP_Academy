<?php


for($i = 1; $i <= 100; $i++){

	for($j = 2; $j < $i ; $j++){

		if($i%$j==0) continue 2;
	}
	echo "simple = {$i}<br>";
}

