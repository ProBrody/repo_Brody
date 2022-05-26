<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>
Личный сайт студента GeekBrains
	</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="http://probrody.ru/favicon.png" type="image/x-icon">
	<meta name="yandex-verification" content="30e3d9a141fdfbb8" />
</head>
<body>
<div class="content">
<?php
	include"php/menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/probrody.png" alt="">
		<div class="box_text">
			<p>Добрый день. Меня зовут <i>Василий Пупкин.</i>
			Я совсем недавно начал программировать, 
			однако написал уже свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="http://geekbrains.ru">GeekBrains.</a></p>

			<p>На этом сайте вы сможете сыграть 
			в несколько игр, которые я написал.</p>

			<p>
			<a href="php/puzzle.php">Загадки</a>
			<a href="php/guess.php">Угадайка</a>
			<a href="php/guess_multi.php">Угадайка для двоих</a>
			<br><br>
			<a href="php/gen.php">Генератор пароля</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
Copyright &copy; <?php echo date("Y");?> ProBrody
</div>
</body>
</html>