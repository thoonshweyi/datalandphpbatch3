<?php

     class staticvsnonstatic{

          // Non-static properties
          public $fullname = "Honey Nway Oo";

          // Static properties
          public static $city = "Mandalay";

          // Constant
          const GENDER = "Female";

          // Member Functions

          // Non-static Method
          // (Non-Static method = static property & non-static property can call )
          // (Non-Static method = static method & non-static method can call )

          public function getname(){
               echo "I am Non-Static method. <br/>";

               echo "Name is $this->fullname <br/>";
          }

          public function getcity(){
               echo "I am Non-Static method. <br/>";

               echo "City is ".static::$city."& Hometown is ".static::$city."<br/>";
          }

          public function getgender(){
               echo "I am Non-Static method. <br/>";

               echo "Gender is ".static::GENDER."<br/>";
          }

          public function car(){
               echo "I am Non-Static mehod <br/>";
               $brand = static::carbrand();
               echo "I bought a new ${brand} car. <br/>";
          }

          public function mobilebrand(){
               return "iPhone 14 Pro Max";
          }

          public function beforebuy(){
               echo "I am Non-Static mehod <br/>";

               $brand = $this->mobilebrand();
               echo "I am thinking about to buy a new ${brand} <br/>";
          }

          // Static Method
          // (Static method = can not use non-static property)
          // (Static method can not is Non-Static method)
          // public static function getstaticname(){
          //      echo "I am Static method. <br/>";

          //      echo "Name is $this->fullname <br/>";
          // }

          public static function getstaticcity(){
               echo "I am Static method. <br/>";

               echo "City is ".static::$city."& Hometown is ".static::$city."<br/>";
          }

          public static function getstaticgender(){
               echo "I am Static method. <br/>";

               echo "Gender is ".static::GENDER."<br/>";
          }

          public static function carbrand(){
               return "Toyota LEXUS LX570";

          }

          public static function mobile(){
               echo "I am Static method. <br/>";
               $brand = $this->mobilebrand();
               echo "I bought a new ${brand} <br/>";
          }

          public static function afterbuy(){
               echo "I am Static method. <br/>";
               $brand = self::carbrand();
               echo "I am so lovely my new ${brand} <br/>";
          }
     }

     
     echo "This is Static Vs Non-Static Modifier <br/>";

     $obj = new staticvsnonstatic();
     // Calling Non-Satic Property
     echo $obj->fullname; // Honey Nway Oo
     echo "<br/>";
    
     // Calling Satic Property
     echo $obj::$city;
     echo "<br/>";

     // Calling Constant Property
     echo $obj::GENDER; // Female
     echo "<br/>";

     // Calling Non-Satic Method
     $obj->getname();
     $obj->getcity();
     $obj->getgender();

     echo "<hr/>";

     // Calling Satic Method
     // $obj::getstaticname();
     $obj::getstaticcity();
     $obj::getstaticgender();
     
     staticvsnonstatic::getstaticcity();
     staticvsnonstatic::getstaticgender();
     echo "<hr/>";

     $obj->car(); // I bought a new Toyota LEXUS LX570 car.

     echo "<hr/>";

     // $obj::mobile(); // error cuz Static method can not call Non-Static method
     // echo "<hr/>";


     $obj->beforebuy();
     echo "<hr/>";

     $obj::afterbuy();
     echo "<hr/>";

?>
<!-- 25ST -->