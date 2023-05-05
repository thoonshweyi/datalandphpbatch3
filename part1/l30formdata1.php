<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Data 1</title>
    </head>
    <body>
        
        <h3>Hello Friend! Welcome to <?php echo $_GET["city"] ?>.</h3>
        <p>I am <?php echo $_GET['name'] ?>. I got you data by passing GET method.</p>
    
        <h3>Hello Friend! Welcome to <?php echo $_POST["city"] ?>.</h3>
        <p>I am <?php echo $_POST['name'] ?>. I got you data by passing POST method.</p>
    </body>
</html>