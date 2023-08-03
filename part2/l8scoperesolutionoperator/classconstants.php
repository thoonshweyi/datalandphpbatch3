<?php

     class classconstants{
          // Member Variables

               // Properties
               public $name = "aung aung";

               // Constants
               const NAME = "Mya Hinin Yee Lwin";
               public const CITY = "Yangon";
               protected const EMAIL = "mamamya@gmail.com";
               private const PASSWORD = "12345678";

          // Member Functions
          public function getinfo(){
               echo "Name is ".self::NAME." & She live in ".self::CITY." <br/>";
          }

          public function getaccess(){
               echo "Email is ".self::EMAIL." & Password is ".self::PASSWORD." <br/>";
          }
     }

     class baby1 extends classconstants{

     }

     class baby2 extends classconstants{
          public function getcontent(){
               echo "Name is ".self::NAME." & She live in ".self::CITY." <br/>";
          }

          public function getemail(){
               echo "Email is ".self::EMAIL."<br/>";
          }
          // this method is not useless cuz password was private
          public function getpassword(){
               echo "Password is ".self::PASSWORD."<br/>";
          }
     }

     echo "This is Class Constant <br/>";

     $obj = new classconstants();
     echo $obj::NAME; // Mya Hinin Yee Lwin
     echo "<br/>";
     echo classconstants::CITY; // Yangon
     echo "<br/>";
     // echo $obj::EMAIL; // *error cuz it's was protected
     // echo $obj::PASSWORD; // *error cuz it's was private
     
     echo "<br/>";
     echo $obj->getinfo(); // Name is Mya Hinin Yee Lwin & She live in Yangon
     echo $obj->getaccess(); // Email is mamamya@gmail.com & Password is 12345678
     
     echo "<hr/>";

     echo "This is Class Constant Baby 1<br/>";
     
     $bb1 = new baby1();
     echo $bb1::NAME; // Mya Hinin Yee Lwin
     echo "<br/>";
     echo baby1::CITY; // Yangon
     echo "<br/>";
     // echo $bb1::EMAIL; // *error cuz it's was protected
     // echo $bb1::PASSWORD; // *error cuz it's was private
     
     echo "<br/>";
     echo $bb1->getinfo(); // Name is Mya Hinin Yee Lwin & She live in Yangon
     echo $bb1->getaccess(); // Email is mamamya@gmail.com & Password is 12345678
     
     echo "<hr/>";

     echo "This is Class Constant Baby 1<br/>";
     
     $bb2 = new baby2();
     echo $bb2::NAME; // Mya Hinin Yee Lwin
     echo "<br/>";
     echo baby2::CITY; // Yangon
     echo "<br/>";
     // echo $bb2::EMAIL; // *error cuz it's was protected
     // echo $bb2::PASSWORD; // *error cuz it's was private
     
     echo "<br/>";
     echo $bb2->getinfo(); // Name is Mya Hinin Yee Lwin & She live in Yangon
     echo $bb2->getaccess(); // Email is mamamya@gmail.com & Password is 12345678
     
     echo $bb2->getcontent(); // Name is Mya Hinin Yee Lwin & She live in Yangon
     echo $bb2->getemail(); // Email is mamamya@gmail.com
     echo $bb2->getpassword(); // *error cuz password was private
  
     echo "<hr/>";


?>