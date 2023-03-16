<?php

	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$chem = filter_var(trim($_POST['chem']),
	FILTER_SANITIZE_STRING);
	$id = 1;


	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','root','register-bd');
	
	$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass`= '$pass'");
	$user=$result->fetch_assoc();
	if(count($user)==0){
		header('Location: index.php');
		$a=false;
		exit();
	}
	
	setcookie('chem1', $user['chem'],time()+3600, "/");
	setcookie('id', $user['id'],time()+3600, "/");
	
	$mysql->close();
	
	header('Location: prof.php');
?>