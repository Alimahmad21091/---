<?php
$email = addslashes($_POST["email"]);
$pwd = addslashes($_POST["passwd"]);
if (!$email || !$pwd)
echo "<html><head><meta http-equiv='refresh' content='5; url=index.php'>
</head><body><p>Вы задали не все параметры!</p></body></html>";
$pwd = SHA1(MD5($pwd));

require_once("utils/config.php");
$query = "SELECT * FROM user WHERE email='$email'";
$st = $db->query($query);
$res=$st->fetch(PDO::FETCH_BOTH);

$login=$res['email'];
if ($login<>$email){
echo "<html><head><meta http-equiv='refresh' content='5; url=index.php'>
</head><body><p>Пользователь с таким email не зарегистрирован!</p></body></html>"; exit;}
if ($res['password']<>$pwd){
echo "<html><head><meta http-equiv='refresh' content='5; url=index.php'>
</head><body><p>Неправильный пароль!</p></body></html>"; exit;}
session_start();
$_SESSION['login']=$login;
echo "<html><head><meta http-equiv='refresh' content='5; url=index.php'>
</head><body><p>Добро пожаловать, ".$res['surname']." ".$res['name']."</p></body></html>";
?>

