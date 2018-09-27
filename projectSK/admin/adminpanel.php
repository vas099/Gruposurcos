<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: admin.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Страница</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="newart.php" method="post">
			<p>ПРЮВЕТ!!!!!</p>
			<br>
			<p>Ты вошел в административную панель!</p>
		</form>
		<br>
		<a href="..//index.html">а теперь давай на Главную!)</a>
	</body>
</html>