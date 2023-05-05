<?php
    ini_set("display_errors",1);


    // =>MySQLi Procedural


    $conn = mysqli_connect("localhost","root","");

    if(mysqli_connect_error()){
        echo "Failed to Connect :".mysqli_connect_error();
        exit();
    }
    echo "Connected Successfully"."<br/>";

    // Create Database

    $sql = "CREATE DATABASE IF NOT EXISTS phpdbone";
    // $sql = "CREATE DATABASE phpdbone";


    if(mysqli_query($conn,$sql)){
        echo "Database Created Successfully";
    }else{
        echo "Error Found :".mysql_error($conn);
    }
    mysqli_close($conn);

    echo "<hr/>";

    // => MySQLi Object-Oriented
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    // $dbname = "wdf4102";

    // Create Connection
    $conn = new mysqli($dbhost,$dbuser,$dbpass);

    if($conn->connect_errno){
        // echo "Connection Failed:".$conn->connect_errno;
        // exist();

        // die("Connection Failed:".$conn->connect_errno);
        // die("Connection Failed:".$conn->connect_err);
    }
    
    echo "Connected Successfully"."<br/>";

    // Create Database

    $sql = "CREATE DATABASE IF NOT EXISTS phpdbtwo";

    if($conn->query($sql) === true){
        echo "Database Created Successfully";
    }else{
        echo "Error Found:".$conn->error;
    }

    $conn->close();

    echo "<hr/>";

    // =>PDO 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $conn = new PDO("mysql:dbhost=$dbhost",$dbuser,$dbpass);

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // $sql = "CREATE DATABASE phpdbthree";
        $sql = "CREATE DATABASE IF NOT EXISTS phpdbthree";

        $conn->exec($sql);

        echo "Database Created Successfully";
    }catch(PDOException $e){
        echo "Error Found:".$e->getMessage();
    }
?>

<!-- 14PD -->