<?php

     class mymethods{
          // Access Modifier
          // (i) public = anywhere can access
          // (ii) private = only access inside main class
          // (iii) protected = subclass / extented class


          // Class Method
          public function greeting(){
               echo "Have a good day <br/>";
          }

          public function calculate($num){
               echo "Getting calculate number is = ${num} <br/>";
          }

          public function result($num=1){
               echo "Getting result number is = ${num} <br/>";
          }
     }

     $obj = new mymethods();
     echo "This is Class Method <br/>";

     $obj->greeting();

     // $obj->calculate(); //error
     $obj->calculate(150); //Getting calculate number is = 150

     $obj->result(); //Getting calculate number is = 150
     $obj->result(200); //Getting calculate number is = 150


     echo "<hr/>";
?>