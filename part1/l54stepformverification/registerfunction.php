<?php
     ini_set("display_errors",1);

     // session_start();




     require_once("./dbconnect.php");
     require_once("./sessionconfig.php");

     // sudo chmod 777 -R assets/
     if($_SERVER['REQUEST_METHOD'] === "POST"){
          
          // echo "Hello";

          // because of design submit button is outside of <form> element
          // if(isset($_POST['submit'])){
          //      echo "how are you";
          // }
     
          $getfirstname = textfilter($_POST["firstname"]);
          $getlastname = textfilter($_POST["lastname"]);
          $getemail = textfilter($_POST["email"]);
          $getpassword = md5(textfilter($_POST["password"]));
          $getdob = textfilter($_POST["dob"]);
          $getphone = textfilter($_POST["phone"]);
          $getaddress = textfilter($_POST["address"]);
          $getnewsletter = textfilter($_POST["newsletter"]);
          

               
          // echo $getfirstname;
          // echo $getlastname;
          // echo $getemail;
          // echo $getpassword;
          // echo $getdob;
          // echo $getphone;
          // echo $getaddress;

          if($getemail && $getpassword){
               try{
                    $stmt = $conn->prepare("INSERT INTO users(profile,firstname,lastname,email,password,dob,phone,address,newsletter,documents) VALUES(:profile,:firstname,:lastname,:email,:password,:dob,:phone,:address,:newsletter,:documents);");
                    $stmt->bindParam(":profile",$profile);
                    $stmt->bindParam(":firstname",$firstname);
                    $stmt->bindParam(":lastname",$lastname);
                    $stmt->bindParam(":email",$email);
                    $stmt->bindParam(":password",$password);
                    $stmt->bindParam(":dob",$dob);
                    $stmt->bindParam(":phone",$phone);
                    $stmt->bindParam(":address",$address);
                    $stmt->bindParam(":newsletter",$newsletter);
                    $stmt->bindParam(":documents",$documents);


                    
                    $countfiles = count($_FILES["profile"]["name"]);

                    if($countfiles){
                         for($x = 0; $x < $countfiles; $x++){
                              $uploaddir = "./assets/";
                              $filename = $_FILES["profile"]["name"][$x];
                         
                              // $uploadfile = $uploaddir.basename($filename); // ./assets/dog1.jpg
                              
                              // Method 1
                              // $getformat = explode(".",$filename); // ['cutedog1','jpg'
                              // $newfilename = round(microtime(true)).".".end($getformat); // 168751344.jpg
                              // $uploadfile = $uploaddir.basename($newfilename); // ./assets/dog1.jpg

                              // Metho 2
                              $getfilecode = uniqid()."_".time();
                              $getextension = pathinfo($filename,PATHINFO_EXTENSION); // jpg,png
                              $newfilename = $getfilecode.".".basename($getextension); // 64957cebcdcc4_jpg
                              $uploadfile = $uploaddir.basename($newfilename);


                              $uploadtype = explode(".",$filename);
                              $uploadtype = strtolower(end($uploadtype)); //jpg
                              $allowextentions = ["jpg","jpeg","png","gif"];
                         
                              $filesize = $_FILES["profile"]["size"][$x];

                              $filetmp = $_FILES["profile"]["tmp_name"][$x];

                              $errors = [];

                              // check extension
                              if(in_array($uploadtype,$allowextentions) === false){
                                   $errors[] = "Sorry, we just allowed JPG,JPEG,PNG & GIF files types.";
                              }

                              // check size
                              if($filesize > 3000000){
                                   $errors[] = "Sorry, your file is too large";
                              }

                              // upload
                              if(empty($errors) === true){
                                   move_uploaded_file($filetmp,$uploadfile);

                                   echo "File Successfully";
                                   $profile = $uploadfile;
                              }else{
                                   echo "<pre>".print_r($errors,true)."</pre>";
                              }
                         }
                    }

                    $firstname = $getfirstname;
                    $lastname = $getlastname;
                    $email = $getemail;
                    $password = $getpassword;
                    $dob = $getdob;
                    $phone = $getphone;
                    $address = $getaddress;
                    $newsletter = $getnewsletter;

                    $getdocuments = NULL;

                    if(isset($_POST["documents"])){
                         $docs = $_POST["documents"];

                         foreach($docs as $doc){
                              $getdocuments .= $doc.",";
                         }
                         echo $getdocuments;
                    }


                    $documents = $getdocuments;



                    // $stmt->execute();
                    // echo "New Records Created Successfully";

                    // *There will be error if $stmt->execute() twice
                    if($stmt->execute()){
                         // $_SESSION["email"] = $email;
                         // $_SESSION["password"] = $password;
                         // header("Location:./planncohomedecoration/index.php");
                         
                         // ---------------------------------

                         setsession("email",$email);
                         setsession("password",$password);
                         redirectto("./planncohomedecoration/index.php");
                    }else{
                         echo "Try Again";
                    }


               }catch(PDOException $e){
                    echo "Error Found: ".$e->getMessage();
               }

               $conn = null;

          }

     }

     function textfilter($data){
          $data = trim($data);
          $data = htmlspecialchars($data);
          $data = stripslashes($data);

          return $data;
     }
?>

<!-- 
     CREATE TABLE IF NOT EXISTS users(
          id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
          profile VARCHAR(255),
          firstname VARCHAR(20),
          lastname VARCHAR(20),
          email VARCHAR(30) UNIQUE,
          password VARCHAR(255),
          dob DATE,
          phone VARCHAR(13),
          address VARCHAR(100)
     );

     DESC users;
     SHOW INDEX FROM users;
     SHOW INDEXES FROM users;

 -->


 <!--  -->