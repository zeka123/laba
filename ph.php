<html>
<form action="online.php" method="post">
</html>
<?PHP
$login = $_POST['login'];
$pass  = $_POST['password'];
$file = file_get_contents('data.json');
$taskList = json_decode($file,TRUE);
if($file!=NULL){
$end=end($taskList);
$user= reset ($taskList) ;    // отвечает за пользователя
$data=reset ($user);     // Отвечает за пароль логин
for (  ;$login !=$data;){
if ($user==$end){
break;
 }
if ($login==$data){
header('Location: /error.php');
die();
}
$user=next ($taskList);
$data=reset($user);
if ($login==$data){
header('Location: /error.php');
die();
}
 }
}
if ($login==$data){
header('Location: /error.php');
die();
}

if ($login== ""){
header('Location: /error.php');
die();
}
if($pass==""){
header('Location: /error.php');
die();
}
$hash=password_hash($pass,PASSWORD_BCRYPT );
$pass=$hash;

$file = file_get_contents('data.json');

$taskList = json_decode($file,TRUE);

unset($file);

$taskList[] = array('login '=>$login , 'password'=>$pass);
file_put_contents('data.json',json_encode($taskList));

unset($taskList);

$pascoke=setcookie ("password",$pass);
$cookie= $_COOKIE["password"];
$log=$_POST['login'];
$coke=setcookie ("login",$log);
$cok= $_COOKIE["login"];
header('Location: /online.php');
?>
