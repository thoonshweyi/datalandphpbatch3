<?php

     $string = "admin@gmail.commm";

     $result = preg_match("/m{2}/",$string);

     echo $result ? "it is true" : "it is false";
?>