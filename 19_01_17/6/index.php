<?php
/*
6) Доработать 3-задачу таким образом, чтобы при отсутствии авторизационной куки, пользователя редиректило на файл login.php, 
который рендерит форму и пытается авторизовать пользователя(функционал по авторизации также перенести в этот файл)
*/
session_start();

$dbUser =[
	'username' => (!empty($_POST['username']) ? $_POST['username'] : null),
	'password' => (!empty($_POST['password']) ? $_POST['password'] : null),
	'email' => (!empty($_POST['email']) ? $_POST['email'] : null),
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
<?php else:
			header('Location:login.php');
	endif;?>

	<h1>You are Sing in!!!</h1>
