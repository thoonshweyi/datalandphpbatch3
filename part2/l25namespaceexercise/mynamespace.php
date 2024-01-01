<?php
     
     echo __Dir__;
     echo "<br/>";

     spl_autoload_register(function($classname){

          echo "Loading the class = {$classname} <br/>";

          $file = str_replace("\\","/",$classname).".php";
          // echo $file;

          if(file_exists($file)){
               // require_once($file);
               require_once(__DIR__."/".$file);
          }else{
               echo "No File Exists";
          }

          require_once("{$classname}.php");
     });

     $music = new music();
     $music->play();

     $video = new video();
     $video->play();

     $photo = new gallery\photo();
     $photo->play();

     $photo = new gallery\photo();
     $photo->play();
?>