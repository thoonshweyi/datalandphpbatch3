<?php
     // echo "i am core";
     class Core{

          protected $curcontroller = "Mainpage";
          protected $curmethod = "index";

          public function __construct(){
               // echo "i am magic core";
               // $this->geturl();

               // echo "<pre>".print_r($this->geturl(),true)."</pre>";

               // Get Class by first value
                    $url = $this->geturl();
                    // echo ucwords($url[0]);
                    if(file_exists("../app/controllers/".ucwords($url[0]).".php")){
                         $this->curcontroller = ucwords($url[0]);
                         
                         // echo $url[0]."<br/>";
                         // echo $this->$curcontroller."<br/>";
                    }

                    // Require Controller
                    require_once("../app/controllers/".ucwords($url[0]).".php");
                    // Instantiate Controller Class
                    $this->curcontroller = new $this->curcontroller;

               // Get Method by second value
                    if(isset($url[1])){
                         if(method_exists($this->curcontroller,$url[1])){
                              $this->curmethod = $url[1];
                         }
                    }
                    echo $this->curmethod;

               // Get Parameter by third value
          }

          public function geturl(){
               // echo $_GET['url'];

               $url =  isset($_GET["url"]) ? rtrim($_GET["url"],"/") : "";
               // echo $url."<br/>";
                         // filter_var(string,filter)
               $url = filter_var($url,FILTER_SANITIZE_URL);
               // echo $url."<br/>";
               $url = explode("/",$url);
               return $url;
          }
     }
?>