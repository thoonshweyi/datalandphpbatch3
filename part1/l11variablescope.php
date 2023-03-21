<?php
    //Variabl scope
    // (i)Global Variable Scope
    // (ii)Local Variable Scope
    // (iii)Static Variable Scope


    $num1 = 100; //Global Variable
    function funone(){
        echo "Global Variable in function = $num1 <br/>";
    }
    funone(); // Global Variable in function = ( no print out cuz function will generate an error).
    
    echo "Global Variable print outside = $num1"; // Global Variable print outside = 100

    echo "<hr/>";

    function funtwo(){
        $num2 = 200; // Local Variable
        echo "Local Variable in function = $num2 <br/>";
    }
    funtwo(); // Local Variable in function = 200
    echo "Local Variable print outside = $num2"; // Local Variable print outside = ( no print out cuz function will generate an error )

    echo "<hr/>";

    // global Keyword
    $num3 = 300;
    $num4 = 400;

    function funthree(){
        // global $num3;
        // global $num4;
        global $num3,$num4;
        global $result;
        $result = $num3 + $num4;
        echo "This is result , print by funthree = $result <br/>";
    }
    funthree();
    echo "This is result, print outside = $result <br/>";

    $num5 = 500;
    $num6 = 600;
    function funfive(){
        $GLOBALS["sum"] = $GLOBALS['num5'] + $GLOBALS["num6"];
        echo "This is sum, print by funfive = $sum <br/>"; // $GLOBAL["sum"] is not variable
    }
    funfive();
    echo "This is sum, print outside = $sum <br/>"; //This is sum, print outside = 1100
    echo "<hr/>";

    // static Keyword
    // function funseven(){
    //     $num7 = 700;
    //     $num7++;
    //     echo "$num7 <br/>";
    // }
    // funseven(); //701
    // funseven(); //701

    $num7 = 700;
    function funseven(){
        global $num7;
        $num7++;
        echo "$num7 <br/>";
    }
    funseven(); //701
    funseven(); //702
    funseven(); //703

    echo "<br/>";


    function funeight(){
        static $num8 = 800;
        $num8++;
        echo "$num8 <br/>";
    }
    funeight();
    funeight();
    funeight();
    funeight();

    echo "<hr/>";

    // passing by reference
    $num9 = 900;
    function funnine($num9){
        $num9 = 9000;
        echo "$num9 <br/>";
    }
    echo "$num9 <br/>";// 900
    funnine($num9);
    echo "$num9 <br/>";// 900

    echo "<br/>";

    $num10 = 1000;
    function funten(&$num10){
        $num10 = 10000;
        echo "$num10 <br/>";
    }
    echo "$num10 <br/>";// 1000
    funten($num10); // 10000
    echo "$num10 <br/>";// 10000
    echo "$num10 <br/>";// 10000

    echo "<br/>";

    $name = "Aung Aung";
    function funname(&$val){
        $val = "Kyaw Kyaw";
        echo "$val <br/>";
    }
    // echo "$name <br/>"; // Aung Aung
    // funname($name); // Kyaw Kyaw
    // echo "$name <br/>"; // Aung Aung

    $fullname = "Aung Tun Tun";
    echo "$name <br/>"; // Aung Aung
    echo "$fullname <br/>"; // Aung Tun Tun
    // funname("Tun Tun"); //won't overwrite // reference will overwrite a variable
    funname($fullname); //Kyaw Kyaw
    echo "$name <br/>"; // Aung Aung
    echo "$fullname <br/>"; // Kyaw Kyaw


?>