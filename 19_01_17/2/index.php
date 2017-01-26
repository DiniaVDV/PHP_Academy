<?php
/*
2)Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
*/

$countFirstPage = isset($_COOKIE['countFirst']) ? $_COOKIE['countFirst'] : null;
$countFirstPage++;
setcookie('countFirst', $countFirstPage);

?>
<a href="#">Firstpage</a>
<a href="Secondpage.php">Secondpage</a>
<a href="Thirdpage.php">Thirdpage</a>
<a href="Fourthpage.php">Fourthpage</a>

<h2>This is the First page</h2>
