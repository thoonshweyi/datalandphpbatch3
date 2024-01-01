<?php
   
     class course{
          public $courseidx;
          public function __construct($val){
               $this->courseidx = $val;
          }

          public function getcourseidx(){
               echo "Course Index is = ".$this->courseidx."<br/>";
          }
     }

     class lesson extends course{
          public $lessonnumber;

          public function __construct($val){
               $this->lessonnumber = $val;
          }

          public function getlessonnumber(){
               echo "Lesson Number is = ".$this->lessonnumber."<br/>";
          }
     }

     echo "This is Dependency Injection <br/>";

     $getcourse = new course(1);
     $getcourse->getcourseidx(); // Course Index is = 1

     $getlesson = new lesson(10);
     $getlesson->getlessonnumber(); // Course Index is = 1

     $getlesson->getcourseidx();
     // $getcourse->getlessonnumber(); // error

     echo "<hr/>";

     // =>Parent to Child
     class vehicle{
          public $modlenumber;
          public $evcarobj;
          public $carmodeobj;

          public function __construct($val,$price,$type){
               $this->modlenumber = $val;
               $this->evcarobj = new evcar($price);
               $this->carmodeobj = new carmode($type);
          }

          public function getmodelnumber(){
               echo "Vehicle Model Number is = ".$this->modlenumber."<br/>";
          }
     }

     class evcar extends vehicle{
          public $price;

          public function __construct($val){
               $this->price = $val;
          }

          public function getprice(){
               echo "Ev Car Price is = ".$this->price."<br/>";
          }
     }

     class carmode extends vehicle{
          public $type;

          public function __construct($val){
               $this->type = $val;
          }

          public function gettype(){
               echo "Car Type is = ".$this->type."<br/>";
          }
     }

     $getvehicle = new vehicle(1111,20000,"luxury");
     $getvehicle->getmodelnumber(); 

     $getevcar = new evcar(10000);
     $getevcar->getprice(); 

     $getvehicle->evcarobj->getprice(); // Ev Car Price is = 20000
     $getvehicle->carmodeobj->gettype(); // Car Type is = luxury

     echo "<hr/>";

      // =>Child to Parent
     class phone{
          public $brand;

          public function __construct($val){
               $this->brand = $val;
          }

          public function getbrand(){
               echo "Phone brand is =".$this->brand."<br/>";
          }

     }

     class phonemodel extends phone{
          public $price;

          public function __construct($val,phone $phone){
               $this->price = $val;
               // $this->brand = $phone->brand; // passing by properties
               $this->brand = $phone->getbrand(); // passing by member method
          
          }

          public function getprice(){
               echo "Price is =".$this->price."<br/>";
          }
     } 

     $getphone = new phone("iPhone");
     $getphone->getbrand();

     $getphonemodel = new phonemodel(500,$getphone);
     $getphonemodel->getprice();

     // echo $getphonemodel->brand; // iPhone

     // passing by properties
     // $getphonemodel->getbrand(); // Phone brand is = iPhone

     // passing by member method
     // echo $getphonemodel->brand;
     echo "<hr/>";

?>