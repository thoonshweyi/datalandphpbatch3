<?php

     abstract class vehicle{
          abstract public function start();
          abstract public function stop();
     }

     class car extends vehicle{
          public function start(){
               echo "Car Started <br/>";
          }

          public function stop(){
               echo "Car Stopped <br/>";
          }
     }

     class bike extends vehicle{
          public function start(){
               echo "Bike Started <br/>";
          }

          public function stop(){
               echo "Bike Stopped <br/>";
          }
     }

     echo "This is Polymorphism concept with abstract class <br/>";

     $obj1 = new car();
     $obj1->start();
     $obj1->stop();

     $obj2 = new bike();
     $obj2->start();
     $obj2->stop();

     echo "<br/>";
?>