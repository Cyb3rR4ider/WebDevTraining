<?php
include "Classes/Users.php";
session_start();
$xrhsths=new Users();
$xrhsths->regno=$_SESSION['mhtroo'];
$xrhsths->getDb();

$firstname=$xrhsths->firstname;
$lastname=$xrhsths->lastname;
$usertype=$xrhsths->usertype;


echo $firstname." ".$lastname.' Μπήκες μέσα! Καλως ήρθες στην εφαρμογή! '
        . 'Το usertype σου είναι: '.$usertype;
?>

<form align="right" method="post" action="Functions/logout.php">
  <label class="logoutLblPos">
  <input name="submit" type="submit" id="submit2" value="log out">
  </label>
</form>