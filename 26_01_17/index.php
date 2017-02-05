<?php 
require_once("application/config.php");
require_once("application/session.php");
require_once("assets/templates/header.html");
require_once("application/content_reader.php");

$content = getContent($config['content']);?>

<link rel="stylesheet" href="assets/css/bootstrap.css">

<?php	if(!empty($content)):?>

			<div class="container">
				<div class="row">
					<?php foreach ($content as $item):?>
						<div class="col-md-12">
							<form method="get" action="application/open_article.php">
								<h2><?=$item['title']?></h2>
								<p><?=substr($item['content'], 0, 70) . '...';?></p>
								<p><a class="btn btn-default" href="application/contentViewer.php?name=<?=strtolower($item['title'])?>" role="button">View details &raquo;</a></p>
							</form>
						</div>
					<?php endforeach;?>
				</div>
			</div>	
<?php 	endif;

		if(array_key_exists('auth', $_SESSION)):?>
			<hr>	
			<div class="container">
				<div class="row">	
					<div class="col-md-12">
						<form enctype="multipart/form-data" method="post" action="application/uploade_article.php">
							<input type="hidden" name="MAX_FILE_SIZE" value="3000000">
							<div class="form-group">
								<input type="file" name="userfile" accept="text/plain">
							</div>
							<div class="form-group">
								<button class="btn btn-default" type="submit">Add article</button>
							</div>
						</form>
					</div>
				</div>
			</div>	
<?php 	endif;?>

<?php require_once("assets/templates/footer.html");