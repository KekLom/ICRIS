<html>
	<head>
		 <meta charset="utf-8">
		<title>ICRIS-Личный кабинет</title>
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
		<script src="script/script.js" defer></script>
		<link rel="stylesheet" href = "style/style.css">
		<link rel="shortcut icon" href="img\logo.png" type="image/x-icon">
	</head>
	<body>
		<form action="glav.php"><button class="invis"><img src="img/5.png" width="69px" height="69px"></button></form>
		<div class="name"><p class="p1"><?=$_COOKIE['user']?></p></div>
		<div class="inf">
			<div class="resum"><p class="ap2">Моё резюме:</p></div>
			<div class="ad">
				<p class="ap">ФИО:</p>
				<p class="ap"><?=$_COOKIE['user']?></p>
			</div>
			<div class="ad">
				<p class="ap">Контактные данные::</p>
				<p class="ap"><?=$_COOKIE['email']?></p>
			</div>
			<div class="ad">
				<p class="ap">Уровень образования:</p>
				<p class="ap"><?=$_COOKIE['obr']?></p>
			</div>
			<div class="ad">
				<p class="ap">Кол-во баллов за ОГЭ:</p>
				<p class="ap"><?=$_COOKIE['oge']?>/20</p>
			</div>
			<div class="ad">
				<p class="ap">Кол-во баллов за ЕГЭ:</p>
				<p class="ap"><?=$_COOKIE['ege']?>/300</p>
			</div>
			<div class="ad">
				<p class="ap">Навыки:</p>
				<p class="ap"><?=$_COOKIE['nav']?></p>
			</div>
		</div>
		<div class="knops">
			<form action="red.html"><button class="knop">Изменить резюме</button></form>
			<button class="knop">Изменить пароль</button>
			<button class="knop">Изменить почту</button>
			<form action="index.html"><button class="knop">Выйти из профиля</button></form>
		</div>
		<footer>
			<div class="kont4">
				<p class="ak1">+9 (876) 543 21 09</p>
				<p class="ak2">Контактная информация</p>
				<p class="ak3">example@mail.ru</p>
			</div>
		</footer>
	</body>
</html>