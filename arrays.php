<?php
 /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value".'<br>';
         }
         ?> //Κλείνω την php
 //Γράφω οτι θέλω στην HTML
<br>
<<h2>Second Method Now</h2>

<?php //Και συνεχίζω την php
         
         /* Second method to create array. */
         $numbers[0] = "one"; 
         //Όταν βάζω [] δίπλα σε μια μεταβλητή,δηλώνω αυτόματα οτι είναι πίνακας
         //Το νούμερο μέσα στα [] δηλώνει την θέση του πίνακα.
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }

         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
