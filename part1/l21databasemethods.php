<?php
ini_set('display_errors',1);


// (i) MySQLi Procedural
// (ii) MySQLi Object-Oriented
// (iii) Using PDO (PHP Data Objects)

// (i) MySQLi Procedural
                    // hostname,username,password,database
$conn = mysqli_connect("localhost","root","","wdf4102");

if(mysqli_connect_error()){
    echo "Failed to connect :".mysqli_connect_error();
    exist();
}
echo "Connect Successfully";

echo "<hr/>";

$dbhost = "localhost";
$dbuser = "roo";
$dbpass = "";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn){
    // echo "Failed to connect :".mysqli_connect_error();
    // exist();

    die("Failed to connect :".mysqli_connect_error());
}

echo "Connect Successfully";

echo "<hr/>";

?>
