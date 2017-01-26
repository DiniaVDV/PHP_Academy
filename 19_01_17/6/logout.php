<?php
/*
3) Создать форму авторизации на сайте с тремя обязательных полями: login, password и email. 
Если данные введены верно, то записать в cookies специальный ключ, при наличии которого пользователю доступна кнопка  "Выход". 
В момент выхода происходит удаление созданной ранее cookies.*/

session_start();

if($_SESSION['username']){
	session_destroy();
	header('Location: http://localhost/HW/19_01_17/6/index.php');
}

?>
