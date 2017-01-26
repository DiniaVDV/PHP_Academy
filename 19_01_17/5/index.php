<?php
/*
5) Запишите в сессию время захода пользователя на сайт. 
При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
*/
session_start();

$dbUser =[
	'username' => (!empty($_POST['username']) ? $_POST['username'] : null),
	'password' => (!empty($_POST['password']) ? $_POST['password'] : null),
	'email' => (!empty($_POST['email']) ? $_POST['email'] : null),
	'phonenumber' => (!empty($_POST['phonenumber']) ? $_POST['phonenumber'] : null),
];

if(!empty($_POST)){
	if(!empty($_POST['username'])){
		$username = $dbUser['username'];
	}else echo "Login is empty!<br>";
	
	if(!empty($_POST['password'])){
		$password = $dbUser['password'];
	}else echo "Password is empty!<br>";
	
	if(!empty($_POST['email'])){
		$email = $dbUser['email'];
	}else echo "Email is empty!<br>";
	
	if(!empty($_POST['phonenumber'])){
		$phonenumber = $dbUser['phonenumber'];
	}else echo "Phone number is empty!";
	
	if($dbUser['username'] && $dbUser['password'] && $dbUser['email'] && $dbUser['phonenumber']){
		$_SESSION['username'] = $username;
		$_SESSION['phonenumber'] = $phonenumber;
		$_SESSION['timeSingUp'] = date('H:i:s m-d-Y');
		header('Location: index.php');
	}
}		
if(!empty($_SESSION['timeSingUp'])){
	$symbols = [':', '-'];
	$arrayTimeSingUp = explode(' ', (str_replace($symbols, ' ', $_SESSION['timeSingUp'])));
	$secondPast = time() - mktime($arrayTimeSingUp[0], $arrayTimeSingUp[1], $arrayTimeSingUp[2], $arrayTimeSingUp[3], $arrayTimeSingUp[4], $arrayTimeSingUp[5]);
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
			<label>Пользователь зашел <?=$secondPast?> секунд назад</label>
		</form>
<?php endif;?>
<?php	if(empty($dbUser['username']) && empty($dbUser['password']) && empty($dbUser['email'])):?>
		<div class="container">
			<form method="post" action="index.php" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-lable"> Login:</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control" placeholder="login">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-lable"> Password:</label>
					<div class="col-sm-10">
						<input type="password" name="password"  class="form-control" placeholder="password">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-lable"> Email:</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" placeholder="email">
					</div>
				</div>	
				<div class="form-group">
					<label class="col-sm-2 control-lable"> Phone numbers:</label>
					<div class="col-sm-10">
						<input type="text" name="phonenumber" class="form-control" placeholder="+380974563212">
					</div>
				</div>	
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sing in</button>
						</div>
					</div>
				</div>	
			</form>
		</div>
<?php endif;
?>