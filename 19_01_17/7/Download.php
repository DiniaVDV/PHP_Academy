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
$dbStat = 'dbStat.db';
$statIn = [
	'filename' => '',
	'downloadCount' => 1
];
$stats = [];
$flag = false;

if(!empty($_POST['filename'])){
	$statIn['filename'] = $_POST['filename'];
	if(!file_exists($dbStat)){
		touch($dbStat);
	}
	$dbFiles = file_get_contents($dbStat);
	if(empty($dbFiles)){
		array_push($stats, $statIn);
		$serializeDbFiles = serialize($stats);
		file_put_contents($dbStat, $serializeDbFiles);
	}else{
		$stats = unserialize($dbFiles);
		foreach($stats as $key => $value){
			if($value['filename'] == $statIn['filename']){
				$stats[$key]['downloadCount'] += 1;
				$flag = true;
				break;
			}
		}
		if(!$flag){
			array_push($stats, $statIn);
		}
		$serializeDbFiles = serialize($stats);
		file_put_contents($dbStat, $serializeDbFiles);
	}
}
$file ="img/{$_POST['filename']}";

if(file_exists($file)){
	header('Content-Desrciption: File Transfer');
	header('Content-Type: image/jpeg');
	header('Content-Disposition: attachment; filename="'.basename($file)."'");
	header('Content-Length:' . filesize($file));
	readfile($file);
	exit;
}else echo "File isn`t exit";			


