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

?>