<?php
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$obr = filter_var(trim(0),
	FILTER_SANITIZE_STRING);
	$oge = filter_var(trim(0),
	FILTER_SANITIZE_STRING);
	$ege = filter_var(trim(0),
	FILTER_SANITIZE_STRING);
	$nav = filter_var(trim(0),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim('ФИО'),
	FILTER_SANITIZE_STRING);
	// $a = filter_var(trim($_POST['a']),
	// FILTER_SANITIZE_STRING);

	
	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','','register-bd');
	$mysql->query("INSERT INTO `users`(`pass`,`email`,`obr`,`oge`,`ege`,`nav`,`name`)	VALUES('$pass', '$email', '$obr', '$oge', '$ege', '$nav', '$name')");
	
	$mysql->close();
	
	header('Location: /index.html');
?>