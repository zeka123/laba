<html>
<font color="red">Неверный логин или пароль </font>
<h1> HELLO </h1>
 <form  action = "add.php" method="POST" >
     <h2>  Введите логин </h2>
     <input name = "login">            </input>

    <h2> Введите пароль</h2>
    <input name = "password"  type = "password">      </input>
    <p><input type="submit" value=" войти  "    />  </p>
<p> <h3> Нет аккаунта ?  </h3></p>
<?php
echo '<input type="Submit"   value="зарегестрироваться" onclick="window.location.href=\'registrator.php\'; return false;" >';
?>

</html>