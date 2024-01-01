<!-- composer dump-autoload -->
<!-- composer dump-autoload -o-->

<?php
    // require_once("./app/music.php");
    // use app\music;

    require_once("./vendor/autoload.php");

    use app\music;
    // use app\video;

    $music = new music();
    $music->play();

    // $video = new video();
    // $video->play();

    // $photo = new photo();
    // $photo->play();

    // $portrait = new portrait();
    // $portrait->play();

    // $image = new image();
    // $image->play();

    // $picture = new picture();
    // $picture->play();

    // $article = new article();
    // $article->play();
?>