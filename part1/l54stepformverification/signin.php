<?php

    // echo microtime()."<br/>";
    // echo microtime(true);
    // echo round(microtime(true));

    // echo uniqid();
?>

<!-- apache will go default to index.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Step Form Verification</title>
        <link href="./style.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            <div id="dotbox" class="dotbox">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <form id="form" action="./loginfunction.php" method="post" enctype="multipart/form-data">
                <h1>Login in With Us</h1>
                <div class="page">
                    <label for="email">Security :</label>
                    
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" />
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Passcode" />
                  
                </div>
            
     
                
                

                <div class="d-flex">
                    <button type="submit" id="submit" class="btn">Login</button>

                </div>

                <p>You don't have account ? <a href="./signup.php">Signup Here !!!</a></p>
                
            </form>

            <div id="result-container">abcd</div>
        </div>

        <script src="./app.js" type="text/javascript"></script>
    </body>
</html>