
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">


<html>

    <title> laba </title>
</head>

<h1> HELLO </h1>

 <form  action = "add.php" method="POST" >



     <h2>  Введите логин </h2>
     <input name = "login">            </input>

    <h2> Введите пароль</h2>
    <input name = "password"  type = "password">      </input>
    <p><input type="submit" value=" войти  "    />  </p>

 <h3> Нет аккаунта ?  </h3>
<?php

echo '<input type="Submit"   value="зарегестрироваться" onclick="window.location.href=\'registrator.php\'; return false;" >';
?>



</html>