<html>
<form action="online.php" method="post">
</html>
<?php
$pass=$_POST['password'];
$login=$_POST['login'];
$mysql=new mysqli('localhost','zeka','123','turn');

if ($mysql->connect_error) {
    die("Connection error: ".$mysql>connect_error);
    $mysql->close();
 header('Location: /indexerr.php');
    exit();
}

$result=$mysql->query ("SELECT*  FROM `start` WHERE  `login` = '$login'");
$user=$result-> fetch_assoc();
if ($user == null) {
 header('Location: /indexerr.php');
 die();
 }

 $hash=next($user);
 $hash=next($user);


if(!password_verify($pass,$hash)){
 header('Location: /indexerr.php');
die();
}



$mysql->query("UPDATE `start` SET `status`='online'
WHERE  `login`='$login'");



setcookie ("login",$login, time()+999*9999);
setcookie("password",$hash,time()+999*9999);
session_start();
$_SESSION["login"]=$login;
header('Location: /online.php');
$mysql->close();

?>
