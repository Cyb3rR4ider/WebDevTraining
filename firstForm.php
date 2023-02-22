<?php
if ( !isset($_POST['submit']) ){
    

?>
<form action="" method="post">  
        
   
      <label for = "firstname" >first name: </label> 
      <input type = "text" id = "firstname"> <br /> 
   
      <label for = "lastname">Επώνυμο: </label> 
      <input type = "text" id = "lastname"><br /> 
   
      <label for = "email">email: </label> 
      <input type = "text" id = "email"><br> 
    
      <label for = "password">Password εδω:</label> 
      <input type = "password" id = "password"><br> 
   
      <label for = "bday">ΗΜΝΙΑ ΓΕΝΝΗΣΗΣ: </label> 
      <input type = "date" id = "bday"><br> 

      <input type = "submit" value = "send" id="submit"> 
      <input type = "reset"> 
  
</form> 

<?php
}
else{

$onoma=$_POST['firstname'];
$epi8eto=$_POST['lastname'];
$mail=$_POST['email'];
$pwd=$_POST['password'];
$bithday=$_POST['bday'];

}
echo $onoma;
?>








