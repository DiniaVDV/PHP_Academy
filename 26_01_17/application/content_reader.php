  <?php
require_once ('config.php');

function getContent($path){
	$path .= "/";
	$result = [];
	
	if(file_exists($path)){
		$forbiddenFolders = ['.','..'];
		$derictoryHandler = opendir($path);
		while(false !== ($entry = readdir($derictoryHandler))){
			if(!in_array($entry, $forbiddenFolders)){
				$articleName = substr_replace($entry, '', (mb_strlen($entry) - (mb_strlen(strstr($entry , '.')))));
				$result[] = [
                        'title' => $articleName,
                        'content' => file_get_contents($path . $entry)
                    ];
			}
		}
	}
	return $result;
}
