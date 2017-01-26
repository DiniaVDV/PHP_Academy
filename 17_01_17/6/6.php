<?php
/*
6)Пользователю предлагается ввести имя каталога в локальной файловой системе сервера. 
Сценарий PHP выводит содержимое этого каталога в следующем формате: пиктограмма, 
указывающая на тип файла, имя файла, размер (или специальная пометка, если файл является каталогом), 
дата и время последней модификации.
*/

function readDirec($dir){
	

	if($id = opendir($dir)):?>
		<ul>
		<p><strong>Папка <?=$dir?>:</strong><p>
		
		<?php while(($file = readdir($id)) !== false):
				if($file == "." || $file ==".."){
					continue;
				}
				$fDirFile = $dir . DIRECTORY_SEPARATOR . $file;
				if(is_dir($fDirFile)):?>
					<li><?=$file?> </li>
					<?php readDirec($fDirFile);
				else:?>
					<li><?=$file?></li>
				<?php endif;
			
			endwhile;?>
		</ul>
		<?php closedir($id);
	endif;
	
}

$dir = '.';

readDirec($dir);
?>
<form method="post" action="Showinfo.php">
	<label><h3>Введите имя файла/папки(если файл входит в папку - вначале указать имя папки и "/"):</h3></label>
	<input type="text" name="namefile">
	<input type="submit" value="Ok">
</form>
