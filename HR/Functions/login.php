<?php
//ΕΔΩ ΘΑ ΕΡΘΟΥΝ ΤΑ ΔΕΔΟΜΕΝΑ ΑΠΟ ΤΗ ΦΟΡΜΑ ΤΟΥ INDEX.
//EPEITA ΘΑ ΠΑΩ ΝΑ ΡΩΤΗΣΩ ΤΗ ΒΑΣΗ ΑΝ ΤΑ USERNAME/PASSWORD ANTISTOIXOYN
//ΣΕ ΧΡΗΣΤΗ.ΑΝ ΝΑΙ ΘΑ ΤΟΝ ΚΑΝΩ LOG in,ΑΛΛΙΩΣ ΘΑ ΤΟΝ ΞΑΝΑΣΤΕΙΛΩ στο INDEX.
include "../Classes/Database.php";
session_start();
$username=$_POST['uname'];//Εδώ είναι το username που εγραψε ο χρήστης
$password=$_POST['psw'];//Εδώ είναι το password που εγραψε ο χρήστης.

$db=new Database();
$db->connect();

$sql="SELECT * FROM users where Username= ? AND Password= ? ;";


$result = $db->execute($sql, [$username,$password]);
 if ($result->rowCount() == 1) {
 $row = $result->fetch();
   
    $_SESSION['onoma']=$row['FirstName'];
    $_SESSION['eponymo']=$row['LastName'];
    $_SESSION['mhtroo']=$row['RegNO'];
    $_SESSION['usertype']=$row['UserType'];
    header("Location: ../homepage.php");
 }
 else{
     ?>
    <script>
    window.alert('Λυπάμαι δεν είστε εξουσιοδοτημένος χρήστης!');
    </script>
    <?php
      header("Location: ../index.php");
 }
 ?>













?>