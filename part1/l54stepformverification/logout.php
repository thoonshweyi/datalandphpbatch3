<?php

     // session_start();


     // session_destroy();
//      unset($_SESSION["email"]);
//      unset($_SESSION["password"]);

//      if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
//           header("Location:./signup.php");
//      }
// ---------------------------------------------------

include_once("./sessionconfig.php");
unsetsession('email');
unsetsession('password');
     

if(authfailed()){
     redirectto("./signin.php");
}
?>


<!-- 28AU -->