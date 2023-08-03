<?php

// Super class or Main Class
     class myinheritance{
          public $fullname = "Nandar";
          // private $fullname = "Nandar";
          // protected $fullname = "Nandar";
          public $city = "Mandalay";
          public $email = "nandar@gmail.com";
          public $password = "123456";

          public function getaccess(){
               echo "This is site login: email is $this->email & password is $this->password. <br/>";
          }

          public function getinfo(){
               echo "Name is $this->fullname & City is $this->city. <br/>";
          }

         
     }

     
     // Sub Class or Child Class
     class devlogin extends myinheritance{
          public function githublogin(){
               echo "This is github login : email is $this->email. Profile name is $this->fullname. <br/>";
          }
     }

     // Sub Class
     class sociallogin extends myinheritance{
          // Own Method
          public function gmaillogin(){
               echo "This is gmail login: email is $this->email. Profile name is $this->fullname. <br/>";
          }

          // Own Method
          public function facebooklogin(){
               echo "This is facebook login: email is $this->email. Profile name is $this->fullname. <br/>";
          }

          // Method Overrite
          public function getinfo(){
               // Properties Override
               $this->fullname = "Hsu Lae";
               $this->city = "Bago";

               echo "Name is $this->fullname & City is $this->city. <br/>";
          }
     }

     echo "This is Inheritance."."<br/>";
     $obj = new myinheritance();
     $obj->getaccess();
     $obj->getinfo();
    
     echo "<hr/>";

     $dev = new devlogin();
     // echo $dev->fullname();
     // eho $dev->getaccess(); // do not extends class can't get parent class method

     $dev->githublogin(); // extends class can get both properties and methods of parent class
     $dev->getaccess();
     $dev->getinfo();
     // *only public properties and protected properties can get
     // *private properteis can't get
     // Note: public and protected can accessf from sub class. but private can't access from sub class.
     echo "<hr/>";

     $soc = new sociallogin();
     $soc->gmaillogin();
     $soc->facebooklogin();
     $soc->getinfo();
     echo "<hr/>";
?>