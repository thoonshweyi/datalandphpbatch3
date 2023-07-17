<?php 

     ini_set("display_errors",1);
     require_once("./dbconnect.php");
     require_once("./sessionconfig.php");

     session_start();

     if($_SERVER["REQUEST_METHOD"] === "POST"){
          $getemail = textfilter($_POST["email"]);
          $getpassword = md5(textfilter($_POST["password"]));
     
          // echo $getemail;
          // echo $getpassword;

          if($getemail && $getpassword){
               loginverify($getemail,$getpassword);
          }else{
               echo "Enter Username & Password";
          }


          
     }


     function textfilter($data){
          $data = trim($data);
          $data = htmlspecialchars($data);
          $data = stripslashes($data);

          return $data;
     }

     function loginverify($email,$password){
          try{

               $conn = $GLOBALS["conn"];

               // $stmt = $conn->prepare("SELECT email,password FROM users WHERE email='$email' AND password='$password'");
               // $stmt->execute();


               // essential to protect from SQL Injection!!
               $stmt = $conn->prepare("SELECT email,password FROM users WHERE email=:email AND password=:password");
               $stmt->bindParam(":email",$bindemail);
               $stmt->bindParam(":password",$bindpassword);
               
               
               $bindemail = $email;
               $bindpassword = $password;
               
               $stmt->execute();


               // formatprint($stmt->fetch()) // 1 result from first row;
               // formatprint($stmt->fetchAll()); // all results
               // formatprint($stmt->fetch(PDO::FETCH_ASSOC)); // 1 result from first row;
               // formatprint($stmt->fetchAll(PDO::FETCH_ASSOC)); // 1 result from first row;
               
               // echo $stmt->rowCount()."<br/>";

               if($stmt->rowCount() === 0){
                    // echo "No Data."."<br/>";
                    
                    redirectto("./signin.php");

               }else{
                    echo "Yes Data"."<br/>";

                    // $_SESSION["email"] = $bindemail;
                    // $_SESSION["password"] = $bindpassword;
                    // header("Location:./planncohomedecoration/index.php");
                    // ----------------------------------------------------
                    setsession("email",$bindemail);
                    setsession("password",$bindpassword);
                    redirectto("./planncohomedecoration/index.php");
               }
          }catch(PDOException $e){
               echo "Error Found = ".$e->getMessage();
          }
     }


     function formatprint($array){
          echo "<pre>".print_r($array,true)."</pre>";
     }
?>