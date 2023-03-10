<?php

    function singlefun($name){
        echo "Your name is $name";
    }
    // singlefun(); //error
    // singlefun("aung aung");

    function multifun($name,$age){
        echo "Your name is $name and age is $age";
    }
    // multifun();//error
    // multifun("aung aung");//error
    // multifun("aung aung",20);
    // multifun("aung aung",20,"yangon");

    function returnfun($num1){
        return $num1+10;
    }
    echo returnfun(50);

?>