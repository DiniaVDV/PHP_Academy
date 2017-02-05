<?php
require_once("session.php");
require_once ("config.php");
require_once("content_reader.php");
require_once("../assets/templates/header.html");?>

<link rel="stylesheet" href="../assets/css/bootstrap.css"  crossorigin="anonymous">

<?php
$articleName = $_GET['name'];
$flag = false;
$content = getContent($config['content']);

foreach($content as $item):

	if($articleName == $item['title']):?>
		 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?=$articleName;?></h1>
					<p><?=$item['content'];?><p>
				</div>
			</div>
		</div>	
<?php	$flag = true;?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="post" action="Download.php">
						<input type="hidden" name="filename" value="<?=$articleName?>">
						<button type="submit" >Download</button>
					</form>
				</div>
			</div>
		</div>	
<?php	break;
	endif;
	
endforeach;
	if(!$flag):?>
		<h1> 404 Not Found</h1>
	<?php	header("HTTP/1.0 404 Not Found");
	endif;?>
