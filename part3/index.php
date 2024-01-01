<?php
     echo "I am main index";
     echo "<br/>";
     // echo $_SERVER["QUERY_STRING"];

     echo $_GET["url"];
?>   
<!-- 
     php/ apache auto run index file for the target directory 

     http://localhost/phpbatch3/part3/index.php?name=susu
     http://localhost/phpbatch3/part3/index.php?name=susu&gender=female
     
     *result
          I am main index
          name=susu&gender=female

-->