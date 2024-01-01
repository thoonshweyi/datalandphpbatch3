<?php

     // Note:: Type hinting is concept that provide hint to function for the expected data type of arguments;
     // Advantages of type hinting:
          // helps uses debug the code easily or the code provides error very specifically.
          // a greate concept for static kind of data
     
     // Disadvantages of type hinting:
          // function only take one type of data
          // the dynamic data or argument are not there

     declare(strict_types=1);

     class myhint1{
          public function getdata($val){
               echo $val."<br/>";
          }
     }
   

     echo "This is Argument Type hinting <br/>";

     $obj1 = new myhint1();
     $obj1->getdata("aungaung"); // aungaung
     $obj1->getdata("10"); // 10
     $obj1->getdata(100); // 100
     $obj1->getdata(25.68); // 25.68
     $obj1->getdata(true); // 1
     $obj1->getdata(["red","green","blue"]);
     echo "<hr/>";


     class myhint2{
          public function getdata(string $val){
               echo $val."<br/>";
          }
     }
     $obj2 = new myhint2();
     $obj2->getdata("aungaung"); // aungaung aungaung
     $obj2->getdata("10"); // 10 10
     // $obj2->getdata(100); // 100 error
     // $obj2->getdata(25.68); // 25.68 error
     // $obj2->getdata(true); // 1 error
     // $obj2->getdata(["red","green","blue"]); // error error
     echo "<hr/>";

     
     class myhint3{
          public function getdata(int $val){
               echo $val."<br/>";
          }
     }
     $obj3 = new myhint3();
     // $obj3->getdata("aungaung"); // error error
     // $obj3->getdata("10"); // 10 error
     $obj3->getdata(100); // 100 100
     // $obj3->getdata(25.68); // 25 error
     // $obj3->getdata(true); // 1 error
     // $obj3->getdata(["red","green","blue"]); // error
     echo "<hr/>";


     class myhint4{
          public function getdata(bool $val){
               echo $val."<br/>";
          }
     }
     $obj4 = new myhint4();
     // $obj4->getdata("aungaung"); // 1 error
     // $obj4->getdata("10"); // 1 error
     // $obj4->getdata(100); // 1 error
     // $obj4->getdata(25.68); // 1 error
     $obj4->getdata(true); // 1 1
     // $obj4->getdata(["red","green","blue"]); // error error
     echo "<hr/>";


     class myhint5{
          public function getdata(float $val){
               echo $val."<br/>";
          }
     }
     $obj5 = new myhint5();
     // $obj5->getdata("aungaung"); // error error
     // $obj5->getdata("10"); // 10 error
     $obj5->getdata(100); // 100 error
     $obj5->getdata(25.68); // 25.68  25.68
     // $obj5->getdata(true); // error error
     // $obj5->getdata(["red","green","blue"]); // error error
     echo "<hr/>";


     class myhint6{
          public function getdata(array $val){
               echo $val."<br/>";
          }
     }
     $obj6 = new myhint6();
     // $obj6->getdata("aungaung"); // error error
     // $obj6->getdata("10"); // error error
     // $obj6->getdata(100); // error error
     // $obj6->getdata(25.68); // error error
     // $obj6->getdata(true); // error error
     $obj6->getdata(["red","green","blue"]); // Array Arrau
     echo "<hr/>";


     class myhint7{
          public function total(array $arrs){
               $result = 0;

               foreach($arrs as $arr){
                    // $result += $arr;
                    $result = $result+$arr;
               }
               echo $result;
          }
     }
     $obj7 = new myhint7();
     $obj7->total([10,20,30,40,50]); // 150
     echo "<hr/>";


     class phone{
          protected $brand;
          protected $hasfacesensor;
          protected $numberofsim;
          protected $price;

          public function setbrand(string $value){
               return $this->brand = $value;
          }
          public function sethasfacesensor(bool $value){
               return $this->hasfacesensor = $value;
          }
          public function setnumberofsim(int $value){
               $this->numberofsim = $value;
          }
          public function setprice(float $value){
               $this->price = $value;
          }

          public function getinfo(){
               echo "Brand Name = $this->brand <br/> Face Sensor = $this->hasfacesensor <br/> Number of sim  = $this->numberofsim <br/> Price = $this->price <br/>";
          }
     }

     $objphone = new phone();
     $objphone->setbrand("iPhone");
     $objphone->sethasfacesensor(true);
     $objphone->setnumberofsim(2);
     $objphone->setprice(1000.99);
     $objphone->getinfo();

?>