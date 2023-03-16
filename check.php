<?php
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$a = filter_var(trim($_POST['a']),
	FILTER_SANITIZE_STRING);

	
	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','root','register-bd');
	$mysql->query("INSERT INTO `users`(`pass`,`email`,`a`)	VALUES('$pass', '$email','$a')");
	
	$mysql->close();
	
	header('Location: /index.html');
?>