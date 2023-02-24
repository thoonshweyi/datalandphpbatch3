<?php
    // Arrays
    // (i) Indexed Array (Manual Array)
    // (ii) Associative Array
    // (iii) Multidimensional Array

    // (i) Indexed Array (Manual Array) - Array with a numeric array
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

    // (ii) Associative Array - Array with named keys
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
    echo "<hr/>";

    // (iii) Multidimensional Array - Arrays containings one or more arrays

    // $paints = array(
    //     array("red","green","blue","white"),
    //     array("pen","pencil","ruler"),
    //     array("paper","plastic")
    // );
    $paints = [
        ["red","green","blue","white"],
        ["pen","pencil","ruler"],
        ["paper","plastic"]
    ];
    var_dump($paints);
    echo "<br/>";
    echo "<br/>";

    // echo $paints[0]; // Array
    echo $paints[0][0]; //red
    echo "<br/>";
    echo $paints[1][1]; //pencil
    echo "<br/>"; 
    echo $paints[2][1]; //plastic
    echo "<br/>";


    echo "<br/>";
    echo "<br/>";


    // $persons = array(
    //     array("name"=>"Aung Aung","age"=>"20"),
    //     array("name"=>"Su Su","age"=>"30"),
    //     array("name"=>"Yin Yin","age"=>"25")
    // );
    $persons = array(
        ["name"=>"Aung Aung","age"=>"20"],
        ["name"=>"Su Su","age"=>"30"],
        ["name"=>"Yin Yin","age"=>"25"]
    );
    var_dump($persons);
    echo "<br/>";
    echo "<br/>";

    // echo $persons[0];// Array
    echo $persons[0]["name"]; // Aung Aung
    echo "<br/>";
    echo $persons[1]["age"]; // 30
    echo "<br/>";
    echo $persons[2]["name"];// Yin Yin
    echo "<br/>";
    echo $persons[2]["age"]; // 25
  //---------------------------------------------------
  echo "<hr/>";
?>
