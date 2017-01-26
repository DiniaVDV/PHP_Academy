<?php
/*
2)Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
*/
$countThirdPage = isset($_COOKIE['countThird']) ? $_COOKIE['countThird'] : null;
$countThirdPage++;
setcookie('countThird', $countThirdPage);

?>
<a href="index.php">Firstpage</a>
<a href="Secondpage.php">Secondpage</a>
<a href="#">Thirdpage</a>
<a href="Fourthpage.php">Fourthpage</a><br>

<h2>This is the Third page</h2>


