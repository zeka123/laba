


<html>
<form action="online.php" method="post">

<head>

                                        </head>
</html>
<?php
$pas=$_POST['password'];
$log=$_POST['login'];





$file = file_get_contents('data.json');
$taskList = json_decode($file,TRUE);

$end=end($taskList);

$user= reset ($taskList) ;    // отвечает за пользователя
$data=reset($user);     // Отвечает за пароль логин





for ( ;$log !==$data ; ){

if ($end==$user){
header('Location: /indexerr.php');
die();}
$user=next ($taskList);
$data=current ($user);

}

$data=next($user);




if ( password_verify ($pas,$data)){

header('Location: /online.php');

$coke=setcookie ("password",$data);

$cookie= $_COOKIE["password"];


$coke=setcookie ("login",$log);

$cok= $_COOKIE["login"];
}
else

header('Location: /indexerr.php');

?>