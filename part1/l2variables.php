<?php

    // Variables

    $fullname = "U Kyaw Kyaw";
    $job = "Developer";

    echo $fullname;
    echo $job;
    echo "$fullname";  //result = U Kyaw Kyaw
    echo '$fullname'; //result = $fullname

    echo "<br/>";

    echo "My name is                    $fullname";//result = My name is U Kyaw Kyaw
    echo "<br/>";
    echo "My name is ${fullname}";//result = My name is U Kyaw Kyaw
    echo "<br/>";
    echo 'My name is ${fullname}';//result = My name is ${fullname}
    echo "<br/>";
    echo "I am {$job}";//result = I am Developer
    
    echo "<hr/>";

    echo 'He\'s $fullname, he is a $job';// He's my father, he is a $job
    echo "<br/>";
    echo "He\'s $fullname, he is a \$job";// He's my father, he is a $job
    echo "<br/>";
    echo "He\'s $fullname, he is a \${job}";// He's my father, he is a ${job}
    echo "<br/>";
    echo "He\'s $fullname, he is a \{$job}";// He's my father, he is a \{Developer}
    echo "<br/>";
    echo "He\'s $fullname, he is a {\$job}";// He's my father, he is a {$job}

    echo "<hr/>";

    $gender = print 'female';// result = female
    // $nation = echo 'burma'; //result = error

    echo "<hr/>";

    //Concat (.)
    $firstname = 'Aung';
    $lastname = 'Kyaw Kyaw';

    echo $firstname;
    echo $lastname;
    echo "<br/>";
    echo $firstname.$lastname;
    echo "<br/>";
    echo $firstname." ".$lastname;

    //Comments
    # Single Line Comment

    /*Multi Line Comment
    comment 1
    comment 2
    comment 3*/

    //Variabl scope
    // (i)Global Variable Scope
    // (ii)Local Variable Scope
    // (iii)Static Variable Scope

    echo "<hr/>";

    // =>Constant Variable
    // define("variablename","value");
    // string/int/boolean/float oki
    // variable name should be uppercase
    // redefined are deny

    define("FULLNAME","Honey Nway Oo");
    echo FULLNAME; // Honey Nway Oo
    
    echo "<br/>";

    define("FULLNAME","Ma Ma Mya");
    echo FULLNAME; // Honey Nway Oo

    echo "<br/>";

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","mydatabasep@ssw0rd2022A");
    define("DB_NAME","phpdbone");

    echo DB_HOST;
    echo "<br/>";
    echo DB_USER;
    echo "<br/>";
    echo DB_PASS;
    echo "<br/>";
    echo DB_NAME;
    echo "<br/>";

    // =>constant("name") Function 
    echo constant("DB_HOST");
    echo "<br/>";
    echo constant("DB_USER");
    echo "<br/>";
    echo constant("DB_PASS");
    echo "<br/>";
    echo constant("DB_NAME");
    echo "<br/>";

    // => constant: const keyword
    // Note: // string/int/boolean/float oki
    // variable name should be uppercase
    // redefined are deny

    const MESSAGE = "Hello sir, are you ready to learn PHP OOP concept??";
    echo MESSAGE;
    echo "<br/>";
    echo constant("MESSAGE");
    echo "<br/>";

    const MESSAGE = "Hello sir, are you ready to learn ES6 concept??";
    echo MESSAGE;
    echo "<br/>";
    echo constant("MESSAGE");
    echo "<br/>";
?>