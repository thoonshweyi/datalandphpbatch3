<?php

     // Note:: must return 

     declare(strict_types=1);

     class myhint8{
          public function getdata($val){
               return $val. "<br/>";
               
          }
     }

     $obj8 = new myhint8();
     echo $obj8->getdata("aungaung"); //aungaung 
     echo $obj8->getdata("10"); // 10
     echo $obj8->getdata(100); // 100
     echo $obj8->getdata(25.68); // 25.68
     echo $obj8->getdata(true); // 1
     echo $obj8->getdata(["red","green","blue"]); // Array 

     echo "<hr/>";

     class myhint9{
          public function getdata(string $val):string{
               return $val. "<br/>";
          }
     }

     $obj9 = new myhint9();
     echo $obj9->getdata("aungaung"); //aungaung aungaung
     echo $obj9->getdata("10"); // 10 10
     // echo $obj9->getdata(100); // 100 error
     // echo $obj9->getdata(25.68); // 25.68 error
     // echo $obj9->getdata(true); // 1 error
     // echo $obj9->getdata(["red","green","blue"]); // Array error 
     echo "<hr/>";

     class myhint10{
          public function getdata(int $val):int{
               return $val;

          }
     }

     $obj10 = new myhint10();
     // echo $obj10->getdata("aungaung"); //error error
     // echo $obj10->getdata("10"); // 10 error
     echo $obj10->getdata(100); // 100 100
     // echo $obj10->getdata(25.68); // 25 error
     // echo $obj10->getdata(true); // error error
     // echo $obj10->getdata(["red","green","blue"]); // error error 
     echo "<hr/>";


     class myhint11{
          public function getdata(int $x, string $y):int{
               return $x+$y;
               // return $x.$y; // will get error
               // return $x+$y."<br/>"; // will get error 
               // *<br/> should not be used in return, only use in echo
          }
     }

     $obj11 = new myhint11();
     echo $obj11->getdata(10,"200"); // 210
     echo "<hr/>";

     class myhint12{
          public function getdata(bool $val):bool{
               return $val;
          }
     }

     $obj12 = new myhint12();
     echo $obj12->getdata(true); // 1 1
     echo "<hr/>";


     class myhint13{
          public function getdata(float $val):float{
               return $val;
          }
     }

     $obj13 = new myhint13();
     echo $obj13->getdata(100); // 100 100
     echo "<br/>";
     echo $obj13->getdata(25.68); // 25.68 25.68
     echo "<hr/>";

?>