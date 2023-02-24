<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(handlmenae,title,comments)
values('".$_POST['handlmenae']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>

<!doctype HTML>
<html lang="jp">

<head>
<meta charset="utf-8">
    <title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>