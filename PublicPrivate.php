<?php
class MyClass {
   protected $car = "skoda";
   $driver = "SRK";
   
   function __construct($par) {
      // Statements here run every time
      // an instance of the class
      // is created.
   }
   
   function myPublicFunction() {
      return("I'm visible!");
   }
   
   private function myPrivateFunction() {
      return("I'm  not visible outside!");
   }
}
?>