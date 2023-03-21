<?php

    // Super Global Variable (Pre-defined Variable)
    // 1. $GLOBALS
    // 2. $_SERVER
    // 3. $_REQUEST
    // 4. $_POST
    // 5. $_GET
    // 6. $_FILES
    // 7. $_ENV
    // 8. $_COOKIE
    // 9. $_SESSION

    // php have many Super global variable but above 9 variable must know.

    // 1. $GLOBALS
    $num1 = 10;
    $num2 = 20;

    function totalresult(){
        $GLOBALS["result"] = $GLOBALS["num1"] + $GLOBALS["num2"];
    }
    totalresult(); // must invoke at least 1 times
    echo $result;

    echo "<hr/>";

    // 2. $_SERVER
    echo $_SERVER["PHP_SELF"]; // /phpbatch3/part1/l12superglobalvariables.php
    // get the file path
    echo "<hr/>";

    // get user window
    echo $_SERVER["HTTP_USER_AGENT"]; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36
    echo "<hr/>";

    echo $_SERVER["HTTP_HOST"]; // localhost
    echo "<hr/>";

    echo $_SERVER["SERVER_NAME"]; // localhost (Return the name - domain name of the host server - www.domainname.com)
    echo "<hr/>";

    echo $_SERVER["SERVER_SOFTWARE"]; // Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6
    echo "<hr/>";

    echo $_SERVER["SERVER_PORT"]; // 80
    echo "<hr/>";

    echo $_SERVER["SERVER_PROTOCOL"]; // HTTP/1.1
    echo "<hr/>";

    echo $_SERVER["SERVER_SIGNATURE"]; // Apache/2.4.53 (Win64) OpenSSL/1.1.1n PHP/8.1.6 Server at localhost Port 80
    echo "<hr/>";

    echo $_SERVER["REQUEST_METHOD"]; // GET
    echo "<hr/>";

    echo $_SERVER["REMOTE_ADDR"]; // ::1  ( return the ip address from where the user is viewing)
    echo "<hr/>";

    echo $_SERVER["SCRIPT_FILENAME"]; //C:/xampp/htdocs/phpbatch3/part1/l12superglobalvariables.php
    // absolute path
    echo "<hr/>";

    echo $_SERVER["SCRIPT_NAME"]; ///phpbatch3/part1/l12superglobalvariables.php
    // equal to "PHP_SELF"
    echo "<hr/>";
?>


<!-- 
    local ip address (ip address from router)
        19.168.15.1
        19.168.15.2
        19.168.15.3
    
    global ip address (ip address from operator)
        dynamic ip address
            136.228.175.118
            countrycode.serviceprovider.tower
            
            - change offenly

        static ip address
            -premium service in myanmar
-->