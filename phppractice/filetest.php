<?php
     // $filesize = filesize("file1.txt");
     // echo "$filesize";

     $fileopen = fopen("file2.txt","w");

     if($fileopen){
          echo "OKI";
     }else{
          echo "File Not Found.";
     }
?>