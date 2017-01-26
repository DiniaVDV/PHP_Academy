<?php
/*
4) Спросите у пользователя телефон с помощью формы. Затем сделайте так, чтобы при повторном открытии страницы, 
в форме (поля: имя, фамилия, телефон) поле телефон, телефон были автоматически заполнены.
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
		header('Location:index.php');
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
<?php endif;?>
<?php	if(empty($dbUser['username']) || empty($dbUser['password']) || empty($dbUser['email'])):?>
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
							<?php if(!empty($_SESSION['phonenumber'])):?>
							<input type="text" name="phonenumber" class="form-control" placeholder="+380974563212" value="<?=$_SESSION['phonenumber']?>">
							<?php else:?>
							<input type="text" name="phonenumber" class="form-control" placeholder="+380974563212">
							<?php endif;?>
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