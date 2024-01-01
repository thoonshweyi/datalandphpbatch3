<?php
     require_once("./music.php");
     require_once("./video.php");
     
     require_once("./gallery/photo.php");
     require_once("./gallery/animateshow/portrait.php");

     use gallery\photo;
     use gallery\animateshow\portrait;

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

     // $portrait = new gallery\animateshow\portrait();
     // $portrait->play();

     $portrait = new portrait();
     $portrait->play();
?>