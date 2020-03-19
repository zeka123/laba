<html>
 <form  action = "game.php" method="POST" />
  <input type="submit" value="бросить кости"    />

  <?php

session_start();

 $_SESSION["score"];
  $_SESSION["s"]=rand(1,6);


  if ($_SESSION["s"]==1){

  }
echo ("хотите бросить кости еще ?");

 $_SESSION["score"]= $_SESSION["s"] +$_SESSION["score"] ;

if($_SESSION["score"]==100){
echo("ты выгирал");}

if ($_SESSION["score"]>100){
echo($_SESSION["score"]);
echo("ты проебал");
$_SESSION["score"]=0;
die();}

echo($_SESSION["score"]);
 echo ("ваш счет");





  ?>

