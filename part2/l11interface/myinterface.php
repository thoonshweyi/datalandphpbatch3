<?php

     // Note:: Interface can't include method body
     //        Modifier must be public in interface, cuz we need to override
     //        A class must the implements keyword 
     // Note::Can't contain properties but constant variable can set
     interface article{

          const CAPTION = "This is new article for SPORT";

          public function create();
          public function read($id);
          public function update($id,$title);
          public function delete($id);
     
     }

     class myinterface implements article{

          public function setid(){
               echo "I am setid ID. <br/>";
          }
          
          public function create(){
               echo "I am create article".self::CAPTION." <br/>";
          }

          public function read($id){
               echo "I am read article. ID is ${id}<br/>";
          }

          public function update($id,$title){
               echo "I am update article. ID is ${id} and Title is ${title} <br/>";
          }

          public function delete($id){
               echo "I am delete article. Id is ${id}<br/>";
          }

     }
    
     echo "This is Interface <br/>";

     $obj = new myinterface();
     $obj->setid();
     $obj->create();
     $obj->read(10);
     $obj->update(10,"This is new article 10");
     $obj->delete(10);


     echo "<hr/>";
?>