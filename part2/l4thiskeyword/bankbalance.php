<?php

     class bankbalance{
          public $accnum;
          public $name;
          public $balance = 0;

          public function depositamount($amount){
               $this->balance = $this->balance + $amount;
          }

          public function deductamount($amount){
               if(this->balance <= 0){
                    echo "No Balance . You do not have any money <br/>";
               }

               if($this->balance < $amount){
                    echo "Insufficient!!, you are trying to withdraw than your main balance. <br/>";
               }

               $this->balance = $this->balance - $amount;
          }

          public function checkbalance(){
               echo "Your Balance is : $this->balance";
          }
     }

     $bank1 = new bankbalance();
     $bank1->accnum = 1000;
     $bank1->name = "Aung Aung";
     $bank1->accnum = 200000;

     $bank2 = new bankbalance();
     $bank2->accnum = 1001;
     $bank2->name = "Kyaw Kyaw";
     $bank2->accnum = 300000;

     $bank2->checkbalance();

     // 14OP
?>