<?php
header('Content-type: text/html; charset=utf-8');

$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'admin' && $pas == vas099)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else
$script = 'index.html';
header("Location: $script");

?>