<?php

    // if satement

    echo "hello";
    echo "<br/>";

    $x = 10;
    $y = 20;

    if($x > $y){
        echo "Your conditon is yes";
    }
    if($x < $y){
        echo "Your conditon is yes";
    }
    echo "<br/>";

    // if else
    if($x > $y){
        echo "Yes x is greater than y";
    }else{
        echo "No, x less than y";
    }

    echo "<br/>";

    //Short Hand

    if($x < $y) echo "Yes, x less than  y"; else echo "No, x greater than y";
    
    echo "<br/>";

    if($x < $y)
        echo "Yes, x less than  y";
    else
        echo "No, x greater than y";

    
    echo "<br/>";

    $color = "grey";
    $colorvalue = $color; //Assign by reference

    // echo $color;
    // echo $colorvalue;

    // if($colorvalue === "red"){
    //     echo "My fav color is red";
    // }else{
    //     echo "I hate red color";
    // }
    
    // if($colorvalue === "red"){
    //     echo "My fav color is $color";
    // }else{
    //     echo "I hate $color color";
    // }

    if($colorvalue === "red"){
        echo "My fav color is ". $color;
    }else{
        echo "I hate ". $color. " color";
    }
    echo "<br/>";
    echo "<hr/>";


    // Logical Operator
    // && (AND)
    // || (OR)
    // ! (NOT)

    $a = 100;
    $b = 200;
    $c = 300;

    if($a < $b && $b > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br/>";

    if($a < $b && $b < $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br/>";

    if($a < $b || $b > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br/>";

    if($a < $b || $b > $c && $a < $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br/>";

    // true         false   false       result = true
    if($a < $b || $b > $c && $a > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<br/>";

    // true         false   false       result = false
    if(($a < $b || $b > $c) && $a > $c){
        echo "it is true";
    }else{
        echo "it is false";
    }
    echo "<hr/>";



    if(!($a < $b)){
        echo "it is true";
    }else{
        echo "it is false";
    }

    echo "<hr/>";

    // if() elseif() else
    if($b > $c){
        echo "it is true";
    }elseif($b === 200){
        echo "it is equal";
    }else{
        echo "it is false";
    }

    echo "<br/>";

    if($b > $c) echo "it is true"; elseif($b === 200) echo "it is equal"; else echo "it is false";
    
    echo "<br/>";

    if($b > $c)
        echo "it is true";
    elseif($b === 200)
        echo "it is equal";
    else
        echo "it is false";

    echo "<hr/>";

    // Switch
    // switch()

    // swich(condition){
    //     case label1:
    //         code to be executed;
    //         break;
    //     case label2:
    //         code to be executed;
    //         break;
    //     ...
    //     default:
    //         code to be executed;
    // }

    $phone = "iphone";

    switch($phone){
        case "sony":
            echo "i can't buy sony phone";
            break;
        case "iphone":
            echo "i hate apple product";
            break;
        case "mi":
            echo "oki, i can buy";
            break;
        case "samsung":
            echo "my fav mobile product is samsung";
            break;
        default:
            echo "i love keypad";        
    }
    
?>