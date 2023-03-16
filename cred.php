<?php
	if(isset($_POST["save"])){
		$email1 = $_POST['email'];
		$name1 = $_POST['name'];
		$obr1 = $_POST['obr'];
		$oge1 = $_POST['oge'];
		$ege1 = $_POST['ege'];
		$nav1 = $_POST['nav'];
		$user1 = $_COOKIE['user'];
		$id = $_COOKIE['id'];
		
		
	$mysql = new mysqli('localhost','root','','register-bd');
	
	
	$mysql->query("UPDATE `users` SET `email`='$email1' WHERE `id`='$id'");
	$mysql->query("UPDATE `users` SET `name`='$name1' WHERE `id`='$id'");
	$mysql->query("UPDATE `users` SET `obr`='$obr1' WHERE `id`='$id'");
	$mysql->query("UPDATE `users` SET `oge`='$oge1' WHERE `id`='$id'");
	$mysql->query("UPDATE `users` SET `ege`='$ege1' WHERE `id`='$id'");
	$mysql->query("UPDATE `users` SET `nav`='$nav1' WHERE `id`='$id'");
	
	setcookie('email1', $email1,time()+3600, "/");
	setcookie('name1', $name1,time()+3600, "/");
	setcookie('obr1', $obr1,time()+3600, "/");
	setcookie('oge1', $oge1,time()+3600, "/");
	setcookie('ege1', $ege1,time()+3600, "/");
	setcookie('nav1', $nav1,time()+3600, "/");
	}
	header('Location: /LK.php');
?>