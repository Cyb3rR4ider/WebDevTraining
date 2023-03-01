<?php

    class Sports {
    var $Omadiko;
    var $Atomiko;
    
    function setOmadiko($par)  {
        $this->omadiko=$par;
    }
    
    function getOmadiko(){
        echo $this->omadiko."<br>";
    }
    
    function setAtomiko($par)  {
        $this->Atomiko=$par;
    }
    
    function getAtomiko(){
        echo $this->omadiko."<br>";
    }
    
}

    $podosfairo = new Sports();
    $podosfairo->setOmadiko(1);
    echo $podosfairo->getOmadiko();
    
   class Omadiko extends Sports {
   var $Aulhtes;
       
   function setAulhtes($par)  {
        $this->Aulhtes=$par;
   } 
   
    function getAulhtes()  {
       echo $this->Aulhtes."<br>";
    }
   }
?>
