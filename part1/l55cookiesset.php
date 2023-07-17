<?php

     // =>Syntax (NOte :: gone after browser end, do not gone after tab end)
     // setcookie("cookiename","value");

     // setcookie("mmk","Myanmar Kyat");
     // echo "Cookies Set Successfully";

     // =>Syntax (NOte :: gone after browser end, do not gone after tab end)
     // setcookie("cookiename","value",expire);


     // setcookie("mmk","Myanmar Kyat",time()+60*60*24*3); // 3days
     setcookie("mmk","Myanmar Kyat",time()+(86400*5)); // 5days
     echo "Cookies Set Successfully";
?>