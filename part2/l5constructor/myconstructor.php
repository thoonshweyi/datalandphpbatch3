<?php

     class myconstructor{
          public $num1 = 100;
          private $num2 = 200;
          protected $num3 = 300;

          public $message = "Total result is ";

          function greeting(){
               echo "hay hay";
          }

          // Magic Method
          // public function __construct(){
          //      echo "I am start working by automatically !! hee hee :)";
          // }

          // public function __construct($name){
          //      echo "I am ${name}. I am start working by automatically !! hee hee :)";
          // }

          public function __construct(){
               $result = $this->num1+$this->num2+$this->num3;
               
               echo "$this->message : $result <br/>"; // Total result is : 600
               echo "{$this->message} : ${result} <br/>"; // Total result is : 600
          }
     }

     // *automatically invoke when class object is defined.
     // *one class object one constructor

     // $obj = new myconstructor();
     // $obj->greeting();

     // $obj = new myconstructor(); // I am start working by automatically !! hee hee :)
 
     // $obj = new myconstructor("Robot"); // I am Robot. I am start working by automatically !! hee hee :)
     // $obj = new myconstructor(); // *Parameter asking constuctor method must provide relevant parameter.

     $obj = new myconstructor();

?>