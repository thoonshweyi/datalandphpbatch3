<?php

     // Note:: Abstract method can't inclue body
     // NOte:: Any Modifier can set in abstract.
     // A class that extends sub class must extends all of the abstracts methods
     // Note:: Can contain non-/static properties/ common method & constant variable.
     // Note :: When we set abstract method !!! class must be abstract class as well.
     // Abstract clss can't instantiate

     abstract class myabstract{
          public $id = 50;
          public static $notify = "New Article Created";
          const TITLE = "This si new article for SPORT";

          public function createpost(){
               echo "I am from  create post. Post title is = ".self::TITLE."<br/>";
          }

          public function readpost(){
               echo "I am from  read post. ID is is = ".$this->id."<br/>";
          }

          abstract public function updatepost($id,$title);
     
          public function deletepost($id){
               echo "i am from delete post. Id is ${id}"."<br/>";
          }
     }


     class articles extends myabstract{
          public function updatepost($id,$title){
               echo "i am from update post. Id is ${id}. Title is ${title}. <br/>";
          }
     }





     abstract class info{
          abstract protected function name();
          abstract protected function age();
          abstract protected function professional($sex);

          public function getname(){
               return $this->name();
          }

          public function getage(){
               return $this->age();
          }

          public function getprofessional($sex){
               return $this->professional($sex);
          }
     }

     class boyclass extends info{
          public function name(){
               return "Ko Tha";
          }
          public function age(){
               return 25;
          }
          public function professional($sex){
               switch($sex){
                    case "male":
                         $job = "Engineer";
                         break;
                    case "fename":
                         $job = "Doctor";
                         break;
                    default:
                         $job = "Developer";
                         break;
               }    
               return $job;

          }
     }

     class girlclass extends info{
          protected function name(){
               return "MS.July";
          }
          protected function age(){
               return 30;
          }
          protected function professional($sex){
               switch($sex){
                    case "male":
                         $job = "Engineer";
                         break;
                    case "fename":
                         $job = "Doctor";
                         break;
                    default:
                         $job = "Developer";
                         break;
               }    

               return $job;
          }
     }
     


     echo "This is Abstract Method <br/>";

     // ERROR :: We can't intantiate abstract class
     // $obj1 = new myabstract();
     // $obj1->createpost();
     // $obj1->readpost();

     $obj2 = new articles();

     echo $obj2->id;
     echo "<br/>";
     echo $obj2::$notify;
     echo "<br/>";
     echo $obj2::TITLE;
     echo "<br/>";

     $obj2->createpost();
     $obj2->readpost();
     $obj2->updatepost(20,"This is new post 20");
     $obj2->deletepost(100);
     echo "<hr/>";


     $objboy = new boyclass();
     $boyname = $objboy->name();
     $boyage = $objboy->age();
     $boypro = $objboy->professional("male");

     echo "${boyname} is a ${boyage} years old & he is an ${boypro} <br/>";

     $objgirl= new girlclass();
     // $girlname = $objgirl->name();
     // $girlage = $objgirl->age();
     // $girlpro = $objgirl->professional("female");
     // *error protected properties access error

     $girlname = $objgirl->getname();
     $girlage = $objgirl->getage();
     $girlpro = $objgirl->getprofessional("female");

     echo "${girlname} is a ${girlage} years old & she is an ${girlpro} <br/>";

?>