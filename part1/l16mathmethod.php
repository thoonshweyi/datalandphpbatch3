<?php
    // abs() Function
    // abs(number);

    echo abs(32)."<br/>"; // 32
    echo abs(-32)."<br/>"; // 32
    echo abs(32.75)."<br/>"; // 32.75
    echo abs(-32.75)."<br/>"; // 32.75

    echo "<hr/>";

    // round() Function
    // round(number)

    echo round(32.64)."<br/>"; // 33
    echo round(32.54)."<br/>"; // 33
    echo round(32.44)."<br/>"; // 32
    echo round(-32.64)."<br/>"; // -32

    echo round(-32.14)."<br/>"; // 32
    echo "<hr/>";

    // ceil() Function
    // ceil(number)
    echo ceil(32.64)."<br/>"; // 33
    echo ceil(32.54)."<br/>"; // 33
    echo ceil(32.44)."<br/>"; // 33

    // ***
    echo ceil(-32.34)."<br/>"; // -32
    echo ceil(-32.64)."<br/>"; // -32
    echo "<hr/>";


    // floor() Function
    // floor(number)
    echo floor(32.64)."<br/>"; // 32
    echo floor(32.54)."<br/>"; // 32
    echo floor(32.44)."<br/>"; // 32

    // ***
    echo floor(-32.34)."<br/>"; // -33
    echo floor(-32.64)."<br/>"; // -33

    echo "<hr/>";

    // max() Function
    // max(number)

    echo max(2,4,20,6,8,10)."<br/>"; // 20
    echo max(2,4,20,6,-40,8,10)."<br/>"; // 20
    echo max(2,4,20,6,"100",-40,8,10)."<br/>"; // 100

    echo "<hr/>";

    // min() Function
    // min(number)

    echo min(2,4,20,6,8,10)."<br/>"; // 2
    echo min(2,4,20,6,-40,8,10)."<br/>"; // -40
    echo min(2,"-100",4,20,6,-40,8,10)."<br/>"; // -100


    echo "<hr/>";

    // pow() Function
    // pow(x,y)

    echo pow(2,4)."<br/>"; // 16
    echo pow(3,4)."<br/>"; // 81

    echo "<hr/>";

    // log() Logrithm Function
    // log(number,base);
    // A logarithm is the power to which a number must be raised in order to get some other number

    echo log(10,2)."<br/>"; //3.3219280948874
    echo log(20,2)."<br/>"; //4.3219280948874
    echo log(80,3)."<br/>"; // 3.9886925350038
    echo "<hr/>";
    




    
    // sqrt() Function
    // sqrt() Function
    echo sqrt(4)."<br/>"; // 2
    echo sqrt(9)."<br/>"; // 3
    echo sqrt(0.81)."<br/>"; // 0.9
    echo sqrt(-4)."<br/>"; // NAN

    echo "<hr/>";

    // rand() Function
    // rand() or rand(min,max)

    echo rand()."<br/>";
    echo rand()."<br/>";
    echo rand(1000,10000)."<br/>";
    echo "<hr/>";


    // number_format() Function
    // number_format(num,decimals)
    // number_format(num,decimals,decimal_separator,thousands_separator)

    echo number_format(1500,2)."<br/>"; //1,500.00
    echo number_format(1250000,2)."<br/>"; //1,250,000.00
    echo number_format(1250000,2,".",',')."<br/>"; //1,250,000.00
    echo number_format(1250000,2,",",'.')."<br/>"; //1.250.000,00
    echo number_format(1250000,2,".",'-')."<br/>"; //1-250-000.00



?>