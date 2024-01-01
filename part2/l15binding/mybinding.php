<?php


     // Daba binding
          // (i) Static binding (or) Early binding
          // (ii) Dynamic Binding (or) Late binding

          // binding everything before program running / Static binding / Early binding
          // index.php > Compile  > Execute
          // echo 1+1 10101110 2
          // echo 1+1 10101110 2
          // echo 1+1 10101110 2
          // echo 1+1 10101110 2

          // program run time  Dynamic binding / Late binding / Late Static binding
          // index.php > Transpile  > Execute
          // echo 1+1 10101110 2

     class hola1{
          public $name = "Ko Ko";

          public function friend(){
               return "My best friend name is ".$this->name. "<br/>";
          }

          public function getfriend(){
               echo $this->friend();
          }
     }
    
     class hola2 extends hola1{
          public function friend(){
               return "My best friend name are ".$this->name. " and Su Su<br/>";
          }
     }

     class hola3{
          public static $name = "Ko Ko";

          public static function friend(){
               return "My best friend name is ".self::$name. "<br/>";
          }

          public static function getfriend(){
               // echo self::friend();
               echo static::friend();
          }
     }

     class hola4 extends hola3{
          public static function friend(){
               return "My best friend name are ".self::$name. " and Su Su<br/>";
          }

          // public static function getfriend(){
          //      echo self::friend();
          // }
     }

     echo "This is data binding <br/>";

     $obj1 = new hola1();
     echo $obj1->friend(); // My best friend name is Ko Ko
     $obj1->getfriend(); // My best friend name is Ko Ko


     $obj2 = new hola2();
     echo $obj2->friend(); // My best friend name are Ko Ko and Su Su
     echo $obj2->getfriend(); // My best friend name are Ko Ko and Su Su
   
     echo "<hr/>";

     $obj3 = new hola3();
     echo $obj3::friend(); // My best friend name is Ko Ko
     $obj3::getfriend(); // My best friend name is Ko Ko


     $obj4 = new hola4();
     echo $obj4::friend(); // My best friend name are Ko Ko and Su Su
     echo $obj4::getfriend(); // My best friend name are Ko Ko and Su Su


     echo "<hr/>";

?>