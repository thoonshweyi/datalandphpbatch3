<?php

     // echo "hay";

     // Define Class Object

     // class classname{
          // class body

          // properties
          // methods
     // }
     // new classname();
// --------------------------------------------------------------------------------------------------
     // *accouding to naming convention classname should start start with capital letter
     // *class will run only when it is invoked


     class myproperties{
          // Properties
          var $firstname = "Date Land ";
          var $lastname = "Technology";
     }

     $obj = new myproperties();
     echo "This is Class Object <br/>";

     echo $obj->firstname.$obj->lastname;

     echo "<hr/>";
?>