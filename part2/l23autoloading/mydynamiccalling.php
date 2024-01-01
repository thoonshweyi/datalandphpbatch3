<?php

     // require_once("./music.php");
     // require_once("./video.php");

     // spl_autoload_register(callback function);

     spl_autoload_register(function($classname){
          echo "Loading the class = ($classname) <br/>";
          require_once("$classname.php");
     });

     $music = new music();
     $music->play();

     $video = new video();
     $video->play();

     // can't call *** spl_autoload_register() can call same path
     $photo = new photo();
     $photo->play(); 


     // At the beginning, sayar says filename and classname must defined same name
     // this is because we want to use autoloading.

     // and classname's initial letter must be capitalal letter and function name muse be all small letter.
     // this is because classname and function name seem to be clear at a glance.  
?>
