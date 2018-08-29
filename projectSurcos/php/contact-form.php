<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["telephon"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "vas09980@gmail.com";
$sub = "Сообщение с сайта SK";

/* Формат письма */
$mes = "Сообщение с сайта SK.\r\n";
$mes = "Имя отправителя: $name \r\n";
$mes = "Электронный адрес отправителя: $email\r\n";
$mes = "Телефон отправителя: $tel\r\n";
$mes = "Текст сообщения: $message\r\n";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://localhost:8888/projectSurcos/');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Спасибо, Ваше сообщение отправлено.<br> Мы ответим Ваш запрос в ближайшее время.</body>';}
else {
	header('Refresh: 5; URL=http://biznessystem.ru');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на Главную страницу</body>';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>