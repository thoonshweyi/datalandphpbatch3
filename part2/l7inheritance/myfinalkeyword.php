<?php

     // Note:: "final" keyword use to restrict method and class not to be share with child class
     // final class can't inherit by child class.
     // final method can't be overwrite by child class but can access from parent class.
    
     // final class myfinalkeyword{
     class myfinalkeyword{
          public $fullname = "Nandar";
          public $city = "Mandalay";
          public $email = "nandar@gmail.com";
          public $password = "123456";

          public function getaccess(){
               echo "This is site login: email is $this->email & password is $this->password. <br/>";
          }

          final public function getinfo(){
               echo "Name is $this->fullname & City is $this->city. <br/>";
          }
     }


     // Sub Class or Child Class
     class developerlogin extends myfinalkeyword{
          public function githublogin(){
               echo "This is github login : email is $this->email. Profile name is $this->fullname. <br/>";
          }

          // public function getinfo(){
          //      echo "My Full Name is $this->fullname & Current City is $this->city. <br/>";
          // }
     }

     echo "This is Final Keyword <br/>";
     $obj1 = new myfinalkeyword();
     $obj1->getaccess();
     $obj1->getinfo();

     echo "<hr/>";

     $obj2 = new developerlogin();
     $obj2->githublogin();
     $obj2->getaccess();
     $obj2->getinfo();

?>