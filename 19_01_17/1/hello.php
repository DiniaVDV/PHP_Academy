<?php
/*
1)2Сделайте две страницы: index.php и hello.php. 
При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. 
При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
*/
session_start();
echo "Hello, {$_SESSION['username']}!";
