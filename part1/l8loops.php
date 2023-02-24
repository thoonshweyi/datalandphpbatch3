<?php

// PHP loops

// for
// foreach
// while
// do..while


    $colorones = ["red","green","blue","white","black","grey","pink"];// indexed array
    // echo $colorones;
    var_dump($colorones);
    echo "<br/>";
    echo count($colorones);
    echo "<br/>";

    $coloroneskey = array_keys($colorones);
    echo $coloroneskey;
    echo "<br/>";
    var_dump($coloroneskey);
    echo "<br/>";
    echo "<br/>";


    // for loop
    // for(statement1;statement2;statement3){
        // code to executed;
    // }

    for($i = 0; $i < count($colorones); $i++){
        // echo "$i";
        // echo "<br/>";
        // echo "This is indexed array or manual array by forloop = index key is ". $i ." and value is ".$colorones[$i] . "<br/>";
        echo "This is indexed array or manual array by forloop = index key is ". $coloroneskey[$i] ." and value is ".$colorones[$i] . "<br/>";

    }
    echo "<hr/>";

    $posts = [
        "postone"=>"this is news post one",
        "posttwo"=>"this is news post two",
        "postthree"=>"this is news post three",
        "postfour"=>"this is news post four"
    ]; // Associative array

    $postskey = array_keys($posts);
    // var_dump($postskey);

    for($x = 0; $x < count($posts) ; $x++){
        // echo $x;
        // echo "<br/>";
        echo "This is associative array by forloop = index key is ". $postskey[$x] ." and value is ".$posts[$postskey[$x]] . "<br/>";
    }

    echo "<hr/>";
    $employees = [
        ["name"=>"Aung Aung","gender"=>"Male"],
        ["name"=>"Su Su","gender"=>"Female"],
        ["name"=>"Nu Nu","gender"=>"Female"],
        ["name"=>"Kyaw","gender"=>"Male"],
        ["name"=>"Tun Tun","gender"=>"Male"]
    ]; // Multidimensional Array

    $employeeskey = array_keys($employees);
    // var_dump($employeeskey);

    // remove cover first array (mulit array)
    for($k = 0; $k < count($employees); $k++){
        $newkey = array_keys($employees[$employeeskey[$k]]);
        // var_dump($newkey);
        // remove cover second array (asso array)

        for($j = 0; $j < count($newkey); $j++){
            // var_dump($employees[$k][$newkey[$j]]);
            echo "This is multidimensional array by forloop = index key is ". $newkey[$j] ." and value is ". $employees[$k][$newkey[$j]]. "<br/>";
        }
    }
?>  

<!-- 17BT -->