<?php
     class myclone{
          public function project($name){
               echo "I create a new ${name} project. <br/>";
          }

          public function task(){
               echo "i am new task. <br/>";
          }
          public function __call($method,$vals){
               echo "You not yet defined these \"$method\" non-static method so your value = "."<pre>".print_r($vals,true)."</pre>"." is here.<br/>";
          }


          public static function exam(){
               echo "i am new exam. <br/>";
          }
          public static function __callstatic($method,$vals){
               echo "You not yet defined these \"$method\" static method so your value = "."<pre>".print_r($vals,true)."</pre>"." is here.<br/>";
          }
     }


     $obj1 = new myclone();
     $obj1->project("POS");
     $obj1->project("Book Store");

     // $obj2 = $obj1;
     $obj2 = clone $obj1;
     $obj2->project("E-wallet");


     echo "<hr/>";

     // $obj1->tasks();

     // method_exists( classname string, methodname string)
     // if(method_exists("myclone","task")){
     //      $obj1->task();
     // }else{
     //      $obj1->tasks();
     // }

     // if(method_exists($obj1,"task")){
     //      $obj1->task();
     // }else{
     //      $obj1->tasks();
     // }

     if(method_exists(new myclone(),"task")){
          $obj1->task();
     }else{
          $obj1->tasks();
     }
     
     echo "<hr/>";


     if(method_exists("myclone","exam")){
          $obj1::exam();
     }else{
          $obj1::exams();
     }

     // if(method_exists($obj1,"exam")){
     //      $obj1::exam();
     // }else{
     //      $obj1::exams();
     // }

     // if(method_exists(new myclone(),"exam")){
     //      $obj1::exam();
     // }else{
     //      $obj1::exams();
     // }
     echo "<hr/>";

?>