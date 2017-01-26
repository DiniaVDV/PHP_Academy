<?php
/*
2)Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
*/

$dbVisirPages =[
	'First page' => (!empty($_COOKIE['countFirst']) ? $_COOKIE['countFirst'] : null),
	'Second page' => (!empty($_COOKIE['countSecond']) ? $_COOKIE['countSecond'] : null),
	'Third page' => (!empty($_COOKIE['countThird']) ? $_COOKIE['countThird'] : null),
];
?>
<a href="index.php">Firstpage</a>
<a href="Secondpage.php">Secondpage</a>
<a href="Thirdpage.php">Thirdpage</a>
<a href="#">Fourthpage</a>

<h2>This is the Fourth page</h2>

<p>Hello! You visited: <p>
	<ul>
	<?php foreach($dbVisirPages as $key => $value):
			if(!empty($value)):
				if($value >= 1):?>
					<li><?=$key?></li>
				<?php endif;
			endif;
		endforeach;?>
	</ul>