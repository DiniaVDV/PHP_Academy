<?php
require_once('session.php');
require_once ('config.php');
require_once('content_reader.php');

$content = getContent($config['content']);
$validType = 'text/plain';
$uploadeDir = '../data/content/';
$flag = false;

if(isset($_FILES['userfile'])){
	if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
		if($validType == $_FILES['userfile']['type']){
			$nameNewArticle = substr_replace($_FILES['userfile']['name'], '', (mb_strlen($_FILES['userfile']['name']) - mb_strlen(strstr($_FILES['userfile']['name'], '.'))));
			foreach($content as $key => $article){
				if($article['title'] == $nameNewArticle) {
					$flag = true;
				}
			}
			if(!$flag){
				move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadeDir . $_FILES['userfile']['name']);
				header('Location:http://localhost/CW/26_01_17/');
			}else {
				echo "File exists.";
			}
		}
	}else{
	echo "You didn`t choose file! ";
}
}
?>
	<a href="http://localhost/CW/26_01_17/">Back</a>
