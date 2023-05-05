<?php

ini_set("display_errors",1);

    // =>MySQLi Procedural

    $conn = mysqli_connect("localhost","root","","phpdbone");

    if(mysqli_connect_error()){
        echo "Failed to connect to Mysql:".mysqli_connect_error();
        exist();
    }
    echo "Connected Successfully <br/>";

    // Data Select
    $sql = "
        SELECT id,firstname,lastname FROM students WHERE ID = 11;
    ";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "id : ".$row['id']." - Name : ".$row["firstname"]. " ".$row["lastname"]."<br/>";
        }
    }else{
        echo "No Result";
    }
    mysqli_close($conn);

    echo "<hr/>";

    // =>MySQLi Object-Oriented

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "phpdbtwo";

    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    // $sql = "SELECT id,firstname,lastname FROM students";
    // $sql = "SELECT id,firstname,lastname FROM students WHERE lastname = 'hlaing'";
    $sql = "SELECT id,firstname,lastname FROM students ORDER BY lastname";

    $result = $conn->query($sql);

    // echo "$result->num_rows"; //18


    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id : ".$row['id']." - Name : ".$row["firstname"]. " ".$row["lastname"]."<br/>";
        }
    }else{
        echo "No Result";
    }

    $conn->close();
    echo "<hr/>";


    
//  =>PDO
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "phpdbthree";

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        // Select Data
        $stmt = $conn->prepare("SELECT id,firstname,lastname FROM students");
        $stmt->execute();
        
        // while($rows = $stmt->fetch()){
        //     echo "id : ".$row['id']." - Name : ".$row["firstname"]. " ".$row["lastname"]."<br/>";
        // }
        
        // *error
        // while($rows = $stmt->fetchAll()){
        //         echo "id : ".$row['id']." - Name : ".$row["firstname"]. " ".$row["lastname"]."<br/>";
        // }

        foreach($stmt->fetchAll() as $row){
                echo "id : ".$row['id']." - Name : ".$row["firstname"]. " ".$row["lastname"]."<br/>";
        }

    }catch(PDOException $e){
        echo "Error Found: ".$e->getMessage();
    }
    $conn = null;
    echo "<hr/>";

?>