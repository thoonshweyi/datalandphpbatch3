<?php

     setcookie("thb","Thai Baht");
     echo "Cookies Set Successfully";

     // =>Syntax (NOte :: gone after browser end, do not gone after tab end)
     // setcookie("cookiename","value",expire);

     setcookie("thb","Thai Baht",time()+(86400*5),"/"); // 5days
     // setcookie("thb","Thai Baht",time()+(86400*5),"/part1"); // 5days
     echo "Cookies Set Successfully";

?>