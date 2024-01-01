<?php

     interface greeting{
          public function speak();
     }

     class myanmar implements greeting{
          public function speak(){
               return "Mingalarpar";
          }
     }

     class thai implements greeting{
          public function speak(){
               return "Sawadikap";
          }
     }

     class english implements greeting{
          public function speak(){
               return "Hello";
          }
     }

     function results($objs){
          foreach($objs as $obj){
               echo $obj->speak()."<br/>";
          }
     }

     

     echo "This is Polymorphism concept with interface <br/>";

     $data = [
          new myanmar(),
          new thai(),
          new english()
     ];

     results($data);

     echo "<hr/>";
?>