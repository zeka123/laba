<html>
<?php
$cok= $_COOKIE["login"];
echo ($cok);
?>
<div>
<?php
echo( "привет");
 echo '<input type="Submit"   value="играть" onclick="window.location.href=\'game.php\'; return false;" >';
  echo '<input type="Submit"   value="выйти" onclick="window.location.href=\'delete.php\'; return false;" >';
  ?>
  </html>