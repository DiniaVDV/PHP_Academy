<?php

/* 
27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, 
$cols - кол-во столбцов в таблице. Есть список цветов, в массиве: 
$colors = array('red','yellow','blue','gray','maroon','brown','green'). 
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, 
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
В каждой ячейке должно находиться случайное число. 
*/
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rows = 6;
$cols = 7;
?>

<table style="border: solid 1px black">

<?php for($i=1; $i <= $rows; $i++):?>
	<tr>
	<?php for($j=1; $j <= $cols; $j++):?>

		<td style="background:  <?=$colors[rand(0, 6)]?>">	
		<?php echo rand();	
		?>
		</td>
	
	<?php endfor;?>

	</tr>
<?php endfor; ?>

</table>

