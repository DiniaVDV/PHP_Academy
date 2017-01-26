
<?php
/*
6)Пользователю предлагается ввести имя каталога в локальной файловой системе сервера. 
Сценарий PHP выводит содержимое этого каталога в следующем формате: пиктограмма, 
указывающая на тип файла, имя файла, размер (или специальная пометка, если файл является каталогом), 
дата и время последней модификации.
*/
$dbIcon=[
	'php' => 'icon/php.gif',
	'folder' => 'icon/folder.bmp',
	'css' => 'icon/css.ico',
];


if(!empty($_POST['namefile'])){
	$file = $_POST['namefile'];
	if(filetype( $file) == 'file'){
		$nameFile = $file;
		$fileSizeKb = (filesize($file)/1000);
		$fileDate =  date("d F Y H:s:s", filemtime($file));
		
		foreach($dbIcon as $extension => $path){
			if($extension == (mb_substr($file, mb_strlen($file) - 3))){
				$iconDir = $path;
			}		
		}
	}else{
		$nameFile = $file;
		$fileType =  filetype( $file);
		$fileSizeKb = (filesize( $file)/1000);
		$fileDate =  date("F d Y H:s:s", filemtime($file));
		$iconDir = $dbIcon['folder'];
	}
}

?>
<img src=<?=$iconDir?> height="40px" width="40px"><?="<br>{$nameFile}<br> {$fileSizeKb}Kb <br> {$fileDate}"?>