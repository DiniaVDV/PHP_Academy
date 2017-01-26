<?php
/*
7) Продолжение задачи 6 - дать авторизованному пользователю возможность загрузить картинку(jpg, до 3 Мб), 
на отдельной странице выводить список из всех картинок с ссылкой на скачивание, скачивание организовать 
через отдельный файл download.php, который венет все необходимые заголовки для скачивания выбранного файла, 
а также запишет в файл со статистикой данные в сериализованном формате:
$stats = [
  [
     'filename' => 'file.jpg',
     'downloadCount' => 1
],
  [
     'filename' => 'file2.jpg',
     'downloadCount' => 7
],
];
если имя файла совпадает хоть с одним из файлов из массива со статистикой - увеличить счетчик скачиваний, 
и записать структуру снова в файл.


*/
session_start();

$dbUser =[
	'username' => (!empty($_POST['username']) ? $_POST['username'] : null),
	'password' => (!empty($_POST['password']) ? $_POST['password'] : null),
	'email' => (!empty($_POST['email']) ? $_POST['email'] : null),
];



if($dbUser['username'] && $dbUser['password'] && $dbUser['email']){
	$_SESSION['username'] = $dbUser['username'];
}
	
?>
<link href="css/bootstrap.css" rel="stylesheet">

<?php 
		if(!empty($_SESSION['username'])):?>
		<form action="logout.php"> 
			<button type="submit" class="btn btn-default" >[<?=$_SESSION['username']?>]Sing out</button> 
		</form>
<?php else:
			header('Location: http://localhost/HW/19_01_17/7/login.php');
	endif;?>

	<h1>You are Sing in!!!</h1>
	
		<form enctype="multipart/form-data" method="post" action="Upload.php">
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
			<div class="form-group">
				<label >Загрузить картинку:</label>
				<input name="userfile" type="file" >
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default" >Upload</button> 
			</div>
		</form>