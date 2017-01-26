<?php
/*
6) Доработать 3-задачу таким образом, чтобы при отсутствии авторизационной куки, пользователя редиректило на файл login.php, 
который рендерит форму и пытается авторизовать пользователя(функционал по авторизации также перенести в этот файл)
*/
session_start();

?>
<link href="css/bootstrap.css" rel="stylesheet">
<style>
.container{
	margin-top: 20px;
}
</style>
<?php 
	if(!empty($_SESSION['username'])):?>
		<form action="logout.php"> 
			<button type="submit" class="btn btn-default" >[<?=$_SESSION['username']?>]Sing out</button> 
		</form>
<?php endif;?>
<?php if(empty($dbUser['username']) && empty($dbUser['password']) && empty($dbUser['email'])):?>
		<div class="container">
			<form method="post" action="index.php" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-1 control-lable"> Login:</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control" placeholder="login">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-lable"> Password:</label>
					<div class="col-sm-10">
						<input type="password" name="password"  class="form-control" placeholder="password">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-1 control-lable"> Email:</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" placeholder="email">
					</div>
				</div>	
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10">
							<button type="submit" class="btn btn-default">Sing in</button>
						</div>
					</div>
				</div>	
				
			</form>
		</div>
<?php endif;

?>