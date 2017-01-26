<?php
/*
опишите форму для згрузки фйлов. если полученный файл не больше 1мб и при условии не
  было ошибок при передаче, переместите ее в папку MyDir, предварительно ее сосздав и 
  убедившись, что она существует
*/?>
<form  enctype="multipart/form-data" method="post" action="<?=$_SERVER['PHP_SELF']?>">
	<!--<input type="hidden" name="MAX_FILE_SIZE" value="1000000">-->
	Отрправить файл: <input name="userfile" type="file">
	<input type="submit" value="Отправить">
</form>
<?php

if(!empty($_FILES['userfile'])){
	if(($_FILES['userfile']['size']<1000000) && ($_FILES['userfile']['error'] == 0)){
		$dirForWrite = 'MyDir/';
		if(file_exists($dirForWrite)){
			move_uploaded_file($_FILES['userfile']['tmp_name'], $dirForWrite. $_FILES['userfile']['name']);
		}else{
			mkdir($dirForWrite);
			move_uploaded_file($_FILES['userfile']['tmp_name'], $dirForWrite. $_FILES['userfile']['name']);
		}		
	}else print "File is bigger than 1 Mb. Please cheack it.";
}
