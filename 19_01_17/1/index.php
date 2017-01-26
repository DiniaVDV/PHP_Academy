<?php
/*
1)2Сделайте две страницы: index.php и hello.php. 
При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. 
При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
*/
session_start();

if(!empty($_POST)){
	$_SESSION['username'] = $_POST['username'];
	
}else $username = null;
?>

<h1>Заполните форму</h1>
<form method="post" action="index.php">
	Введите имя: <input type="text" name="username">
	<input type="submit" value="Ok">





