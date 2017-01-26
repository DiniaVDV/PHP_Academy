<?php
/*
3) Создать форму авторизации на сайте с тремя обязательных полями: login, password и email. 
Если данные введены верно, то записать в cookies специальный ключ, при наличии которого пользователю доступна кнопка  "Выход". 
В момент выхода происходит удаление созданной ранее cookies.*/
session_start();

$dbUser =[
	'username' => (!empty($_POST['username']) ? $_POST['username'] : null),
	'password' => (!empty($_POST['password']) ? $_POST['password'] : null),
	'email' => (!empty($_POST['email']) ? $_POST['email'] : null),
];

if(!empty($_POST)){
	if(!empty($_POST['username'])){
		$username = $dbUser['username'];
	}else {
		echo "Login is empty!<br>";
	}
	if(!empty($_POST['password'])){
		$password = $dbUser['password'];
	}else echo "Password is empty!<br>";
	
	if(!empty($_POST['email'])){
		$email = $dbUser['email'];
	}else echo "Email is empty!";
	
	if($dbUser['username'] && $dbUser['password'] && $dbUser['email']){
		$_SESSION['username'] = $username;
		 header('Location: index.php');
	}	
}
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
<?php   endif;
		if(empty($dbUser['username']) || empty($dbUser['password']) || empty($dbUser['email'])):?>
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
<?php 	
		endif;
?>