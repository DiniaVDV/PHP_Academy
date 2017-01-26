<?php
/*
2)Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
*/
$countSecondPage = isset($_COOKIE['countSecond']) ? $_COOKIE['countSecond'] : null;
$countSecondPage++;
setcookie('countSecond', $countSecondPage);

?>
<a href="index.php">Firstpage</a>
<a href="#">Secondpage</a>
<a href="Thirdpage.php">Thirdpage</a>
<a href="Fourthpage.php">Fourthpage</a>

<h2>This is the Second page</h2>

