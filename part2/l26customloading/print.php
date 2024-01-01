<?php
    require_once("./mycustomload.php");

    mycustomload::loader("music");
    $music = new music();
    $music->play();

    mycustomload::loader("video");
    $video = new video();
    $video->play();

    mycustomload::loader("gallery\photo");
    $photo = new gallery\photo();
    $photo->play();

    mycustomload::loader("gallery\animateshow\portrait");
    $portrait = new gallery\animateshow\portrait();
    $portrait->play();
?>