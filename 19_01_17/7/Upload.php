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

$validType = "image/jpeg";
$uploadDir="img/";

if(isset($_FILES['userfile'])){
	if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
		if($validType == $_FILES['userfile']['type'] ){
			move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadDir . $_FILES['userfile']['name']);
		}
	}
}

$openImg = opendir($uploadDir);
$file = readdir($openImg);

while(($file = readdir($openImg)) !== false):
	if($file !== "." && $file !==".."):?>
		<form method="post" action="Download.php">
			<input type="hidden" name="filename" value="<?=$file?>">
			<label for="text"><?=$file?><label>
			<button type="submit" >Download</button>
		</form>
	<?php endif;
endwhile;

?>
