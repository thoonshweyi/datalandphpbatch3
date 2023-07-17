<?php

     session_start();
     // echo "hay";

     // echo $_SESSION["idxcount"];

     // => Single Destroy Session
     // unset($_SESSION["idxcount"]);
     // echo "Single Session Destroy Successfully";

     // =>All Destroy Session
     session_destroy();
     echo "All Session Destroy Seccessfully";
?>