<?php
/*
7)Пользователь загружает текстовый файл со списком ссылок. Добавить в базу (файл на сервере) из этого файла только те ссылки, которых нет ни в базе, ни в файле с запрещенными ссылками.
*/
?>
<form  action="uploade.php" method="post">
	Отрправить файл: <input name="userfile" type="file">
	<input type="submit" value="Отправить">
</form>