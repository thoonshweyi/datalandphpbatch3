<?php
    // Arrays
    // (i) Indexed Array (Manual Array)
    // (ii) Associative Array
    // (iii) Multidimensional Array

    // (i) Indexed Array (Manual Array)
    $names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
    echo $names;
    echo "<br/>";
    echo count($names); // count array length
    print $names;
    echo "<br/>";
    print_r($names,false);

    echo "<br/>";

    $colors = ["red","green","blue","white","black","pink"];
    echo $colors;
    echo "<br/>";
    echo count($colors);
    echo "<br/>";
    echo "<pre>".print_r($colors,"true")."</pre>";
    
    var_dump($colors);

    $colors[6] = "grey";
    $colors[7] = "stone";
    $colors[8] = "skyblue";

    $colors[0] = "violet";

    echo "<pre>".print_r($colors,"true")."</pre>";

    echo "My fav color is ". $colors[3];

    echo "<hr/>";
    //----------------------------------------------------

    // (ii) Associative Array
    $news = array("pone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
    var_dump($news);
    echo "<br/>";

    $medias = ["pone"=>"this is post one",
    "ptwo"=>"this is post two",
    "pthree"=>"this is post three"];
    var_dump($medias);
    echo "<br/>";

    $medias["pfour"] = "this is post four";
    $medias["pfive"] = "this is post five";

    echo "<pre>".print_r($medias,"true")."</pre>";
    echo "i like this post, so post title is ".$medias['pthree'];

    //---------------------------------------------------
?>

<!-- 3AR -->