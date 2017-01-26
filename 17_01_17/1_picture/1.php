<?php
/*
-Установите константу для хранение имени файла.
-Проверьте, отправлялась ли форма и корректно ли отправлены данные из формы.
-В случае, если форма была отправлена, отфильтруйте полученные значения.
-Сформируйте строку для записи в файл.
-Откройте соединениес файлом и запишите в него сформированную строку.
-Выполните перезапрос текущей страницы(чтобы избавиться от данных, отправленный методом POST)
*/?>

<h1>Заполните форму</h1>
<form enctype="multipart/form-data" method="post" action="<?=$_SERVER['PHP_SELF']?>">
	Имя:<input type="text" name="fname"><br>
	Фамилия:<input type="text" name="lname"><br><br>
	<input type="submit" value="Отправить!">
</form>
<?php
$userData = ['$username' => '',
			'$userSecondName' => ''	
			];
$urlName = "Database.txt";

	if(empty($_POST['fname'])){
		echo "Поле имя не заполнено";
	}
	if(empty($_POST['lname'])){
		echo "Поле фамилия не заполнено";
	}
	if(!empty($_POST['fname']) && !empty($_POST['lname'])){
		$userData = ['$username' => ($_POST['fname']),
					'$userSecondName' => ($_POST['lname'])	
			];
		if(file_exists($urlName)){
			$databaseNames = file_get_contents($urlName);
			if(empty($databaseNames)){
				$serializeName = serialize($userData);

				file_put_contents($urlName, $serializeName);
				
			}else{
				$unserializeNames = unserialize($databaseNames);
				array_push($unserializeNames, $userData);
				$serializeName = serialize($unserializeNames);
				file_put_contents($urlName, $serializeName);
				header('Location:1.php');
			}
		}
	}



