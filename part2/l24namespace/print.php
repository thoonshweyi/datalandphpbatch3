<?php
     require_once("./music.php");
     require_once("./video.php");
     require_once("./gallery/photo.php");

     use gallery\photo;

     $music = new music();
     $music->play();

     $video = new video();
     $video->play();

     // Method 1
     // $photo = new gallery\photo();
     // $photo->play();

     // Method 2
     $photo = new photo();
     $photo->play();
?>