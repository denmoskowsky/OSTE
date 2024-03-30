<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
session_start();

require "app.php"; //функции, приложение

$url = $_GET['url']; //url-страницы

if(empty($url)) include root."/pages/all/home.php";
else if(file_exists(root."/pages/all/$url")) include root."/pages/$url";
else if(file_exists(root."/pages/guest/$url") AND !isset($_SESSION['uid'])) include root."/pages/$url";
else if(file_exists(root."/pages/all/$url")) include root."/pages/$url";
else include root."/pages/server/404.html";
?>
</body>
</html>