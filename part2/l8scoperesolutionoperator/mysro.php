<?php

     // Note:: define() can't set in class method

// Super class or Main Class
     class mysro{
          const GREETING = "Hello Friend. Good evening from Thailand.";
          const THANKS = "Hi Friend. Thanks for visiting our country";

          public $fullname = "Honey Nway Oo";
     
          public function sayhi(){
               echo self::GREETING;
          }

          public function saythanks(){
               echo static::THANKS;
          }

          public function __construct(){
               echo "I am start working by automatically from Main Class. hee hee :P <br/>";
          }

          public function asset(){
               echo "I bought a new Toyota Car. <br/>";
          }
     }

     class child1 extends mysro{

     }

     class child2 extends mysro{
          const GREETING = "Hello Friend. Good Morning from Srilanka.";
          const THANKS = "Hi Friend. See you again.";

          public function sayhifi(){
               echo self::GREETING; // inhere echo self and static aare same result
          }

          public function saybye(){
               echo static::THANKS; // inhere echo self and static aare same result
          }
     }

     class child3 extends mysro{
          // Method Override - Parent Method Override
          public function __construct(){
               parent::__construct();
               echo "I am start working by automatically from Sub class. <br/>";
          }

          public function asset(){
               parent::asset();
               echo "I boght a new Master Car <br/>";
          }
     }
     

     echo "This is Scope Resolution Operator."."<br/>";
    
     $obj = new mysro(); // I am start working by automatically from Main Class. hee hee :P
     echo $obj->fullname . "<br/>"; // Aung Kyaw Kyaw
     echo $obj::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand.
     echo mysro::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand.
     
     $obj->sayhi();
     echo "<br/>";
     $obj->saythanks();
     
     echo "<hr/>";

     echo "This is Scope Resolution Operator Child 1."."<br/>";

     $ch1 = new child1(); // I am start working by automatically from Main Class. hee hee :P
     echo $ch1->fullname . "<br/>"; // Hello Friend. Good evening from Thailand.
     echo $ch1::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand.
     echo child1::GREETING . "<br/>";

     $ch1->sayhi(); // Hello Friend. Good evening from Thailand.
     echo "<br/>";
     $ch1->saythanks(); // Hi Friend. Thanks for visiting our country

     echo "<hr/>";

     echo "This is Scope Resolution Operator Child 2."."<br/>";

     $ch2 = new child2();
     echo $ch2->fullname . "<br/>"; // Honey Nway Oo
     echo $ch2::GREETING . "<br/>"; // Hello Friend. Good Morning from Srilanka.
     echo child2::GREETING . "<br/>"; // Hello Friend. Good Morning from Srilanka.
     echo child2::THANKS . "<br/>"; // Hello Friend. Good Morning from Srilanka.


     $ch2->sayhi(); // Hello Friend. Good evening from Thailand. // echo with self
     echo "<br/>";
     $ch2->saythanks(); // Hi Friend. See you again. // echo with static::
     echo "<br/>";


     $ch2->sayhifi();
     echo "<br/>";
     $ch2->saybye(); // Hi Friend. See you again.


     echo "<hr/>";


     echo "This is Scope Resolution Operator Child 3."."<br/>";

     $ch3 = new child3();
     echo $ch3->fullname . "<br/>"; // Honey Nway Oo
     echo $ch3::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand.
     echo child3::GREETING . "<br/>"; // Hello Friend. Good evening from Thailand.
     echo child3::THANKS . "<br/>"; // Hi Friend. Thanks for visiting our country


     $ch3->sayhi(); // Hello Friend. Good evening from Thailand. // echo with self::
     echo "<br/>";
     $ch3->saythanks(); //Hi Friend. Thanks for visiting our country // echo with static::
     echo "<br/>";
     $ch3->asset(); // I bought a new Toyota Car. I boght a new Master Car. 

     echo "<hr/>";
?>
