<?php

//o ένας τρόπος
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// Ότι βλέπω πρίν το '=>' είναι το key και μετά απο το '=>'είναι το value.

//ο δεύτερος τρόπος
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";


foreach($age as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value;
  //Για να μην κόψω την php για ένα απλό <br> του το δίνω με echo.
  echo "<br>";
}









