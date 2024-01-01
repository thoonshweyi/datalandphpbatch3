<?php
     class mymagic{
          public $num;
          private $name;
          protected $age;

          public function __construct($val){
               // echo $this->number = $val;

               // property_exists(classname string,propertyname string)
               // if(property_exists("mymagic","num")){
               //      echo $this->num = $val;
               // }else{
               //      echo "Property doesn't exist";
               // }

               // if(property_exists($this,"num")){
               //      echo $this->num = $val;
               // }else{
               //      echo "Property doesn't exist";
               // }

               // if(property_exists("mymagic","name")){
               //      echo $this->num = $val;
               // }else{
               //      echo "Property doesn't exist";
               // }

               // if(property_exists($this,"name")){
               //      echo $this->num = $val;
               // }else{
               //      echo "Property doesn't exist";
               // }

               // if(property_exists("mymagic","age")){
               //      echo $this->num = $val;
               // }else{
               //      echo "Property doesn't exist";
               // }

               if(property_exists($this,"age")){
                    echo $this->num = $val;
               }else{
                    echo "Property doesn't exist";
               }
          }
     }
     
     class mymagicone{
          public function __get($var){
               echo "You not yet defined these \"$var\" properties <br/>";
          }

          public function __set($var,$val){
               echo "You not yet defined these \"$var\" properties so your value \" $val \" is here.<br/>";
          }
     }

     class mymagictwo{
          // For Non-Static Method
          public function __call($method,$vals){
               // echo "You not yet defined these \"$method\" non-static method so your value \" $vals \" is here.<br/>";
               echo "You not yet defined these \"$method\" non-static method so your value = "."<pre>".print_r($vals,true)."</pre>"." is here.<br/>";

          }

          public static function __callstatic($method,$vals){
               echo "You not yet defined these \"$method\" static method so your value = "."<pre>".print_r($vals,true)."</pre>"." is here.<br/>";
          }
     }

     class mymagicthree{
          public $data;

          public function __construct(){
               $this->data = [1,2,3,4,5];
          }

          public function __sleep(){
               echo "Hello sir, i am working, cuz you trying to searilize";
          }
     }

     class mymagicfour{
          public $data;

          public function __construct(){
               $this->data = [1,2,3,4,5];
          }

          public function __wakeup(){
               echo "Hello sir, i am working, cuz you trying to unsearilize";
          }
     }

     class mymagicfive{
          public function __invoke(){
               echo "Hello sir, i am working, cuz you trying to print out you class object as method";
          }
     }

     class mymagicsix{
          public function __toString(){
               echo "Hello sir, i am working, cuz you trying to print out you class object";
          }
     }
   
     

     echo "This is Magic Methods <br/>";

     $obj = new mymagic(100);
     echo "<hr/>";

     $obj1 = new mymagicone();
     echo $obj1->greeting;
     // work when getting properties these are not defined

     $obj1->bye = "Thank You";
     // work when setting properties these are not defined

     echo "<hr/>";


     $obj2 = new mymagictwo();
     $obj2->greeting();
     $obj2->greeting("Morning");
     $obj2->greeting("Morning","Afternoon","Evening");
     // work when calling non-static methods these are not defined

     $obj2::bye();
     mymagictwo::bye("Thank You");
     mymagictwo::bye("Thank You","Regards");
     // work when calling static methods these are not defined

     echo "<hr/>";

     $obj3 = new mymagicthree();
     serialize($obj3);
     echo "<hr/>";

     $obj4 = new mymagicfour();
     $sridatas = serialize($obj4);
     unserialize($sridatas);
     echo "<hr/>";

     $obj5 = new mymagicfive();
     $obj5();
     echo "<hr/>";
     // work when calling object as method

     $obj6 = new mymagicsix();
     echo $obj6;
     echo "<hr/>";
     // work when print out object

     


     
?>