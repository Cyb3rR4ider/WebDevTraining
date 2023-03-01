<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      
function __construct($var1,$var2) {
   $this->title = $var1;
   $this->price = $var2;
}

      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }
   
$physics = new Books('H Fysikh mou',55);
$donkixotis=new Books('Don Kixotis', 120);



echo $donkixotis->title."<br>";
echo $donkixotis->price."<br>";

?>




















