<!-- - to transfter data
xml
json (modern use) -->

<?php

    // json_encode(array);
    // json_decode(array);

    // ----------can't-----------------
    $colors = ["red","green","blue"];
    var_dump($colors);

    $mycolors = json_encode($colors);
    echo "<br/>";
    echo $mycolors;
    echo "<br/>";
    var_dump($mycolors);

    // ------------------------------------------

    $students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
    echo "<pre>".print_r($students,"true")."</pre>";
    echo $students['name']."<br/>";
    echo $students['age']."<br/>";
    echo $students['city']."<br/>";

    $studentsen = json_encode($students);
    echo $studentsen;

    // can't print
    // echo $studentsen["name"];
    // echo $studentsen["age"];
    // echo $studentsen["city"];

    echo "<hr/>";

    // =>Decode by single parameter

    $students = '{"name":"aung aung","age":25,"city":"yangon"}';
    $studentsde = json_decode($students);
    // echo $studentsde;
    echo "<pre>".print_r($studentsde,true)."</pre>";

    // can't print
    // echo $studentsde["name"];
    // echo $studentsde["age"];
    // echo $studentsde["city"];

    // can print (-> object operator)
    echo $studentsde->name."<br/>";
    echo $studentsde->age."<br/>";
    echo $studentsde->city."<br/>";

    foreach($studentsde as $key=>$value){
        echo $key . " is ". $value . "<br/>";
    }

    // =>Decode by multi parameter

    $studentsde = json_decode($students,true);
    // echo $studentsde;
    echo "<pre>".print_r($studentsde,true)."</pre>";

    echo $studentsde["name"]."<br/>";
    echo $studentsde["age"]."<br/>";
    echo $studentsde["city"]."<br/>";

    // can't print (-> object operator)
    // echo $studentsde->name."<br/>";
    // echo $studentsde->age."<br/>";
    // echo $studentsde->city."<br/>";
?>


