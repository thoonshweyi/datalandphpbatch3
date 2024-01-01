<?php
     declare(strict_types=1);

     // Note:

     class mytypehinting{
          public $name;

          public function getname():string{
               return $this->name;
          }

          public function setname(string $val):void{
               $this->name = $val;
          }
     }

     class person extends mytypehinting{
          public $userid;
          public $username;

          function setinfo(array $arr):void{
               $this->userid = $arr["id"];
               $this->username = $arr["name"];
          }
     }







     echo "This is Type hingint <br/>";

     $obj1 = new mytypehinting();
     $obj1->setname("Aung Kyaw Kyaw"); // Aung Kyaw Kyaw
     echo $obj1->getname();

     $obj2 = new person();
     $datas = ["id"=>1,"name"=>"Honey Nway Oo"];
     $obj2->setname("su su"); 
     echo $obj2->getname(); //su su

     echo $obj2->setinfo($datas);
     echo $obj2->userid;
     echo $obj2->username;
     
     echo "<br/>";

     // void can be used php version of upper 7
?>

