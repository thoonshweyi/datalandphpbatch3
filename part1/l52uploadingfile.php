<?php
    // if(isset($_POST['submit'])){
    //     // echo "hay";

    //     // $result = $_POST["profile"];
    //     // echo $result;
    
    //     $result = $_FILES;
    //     // echo $result;
    //     // echo "<pre>".print_r($result,true)."</pre>";
        

    //     echo $_FILES['profile']['name'];            //filename
    //     echo "<br/>";
    //     echo $_FILES['profile']['full_path'];       //filepath
    //     echo "<br/>";
    //     echo $_FILES['profile']['type'];            //filetype (image/jpg, image/jpeg, image/png)
    //     echo "<br/>";
    //     echo $_FILES['profile']['tmp_name'];        // selected file is in tmp path temporarily 
    //     echo "<br/>";
    //     echo $_FILES['profile']['error'];           //error while uploading file
    //     echo "<br/>";
    //     echo $_FILES['profile']['size'];            //filesize (the default size unit is byets)
    //     echo "<br/>";

    //     $fileext = explode(".",$_FILES["profile"]["name"]);

    //     echo "<pre>".print_r($fileext,true)."</pre>";
    //     echo $fileext[0]."<br/>";
    //     echo $fileext[1]."<br/>";

    //     $fileextname = current(explode(".",$_FILES["profile"]["name"]));
    //     echo $fileextname."<br/>";

    //     $fileextformat = end(explode(".",$_FILES["profile"]["name"]));
    //     echo $fileextformat."<br/>";
    // }

    function getfilesize($filesize){
        // echo $filesize;

        if(is_numeric($filesize)){
            // return "OKi";
            
            $idx = 0;
            $prefix = ['B',"Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];
            $fixnum = 1024;

            // echo $prefix[1];

            while(($filesize / $fixnum) > 0.9){
                $filesize = $filesize/$fixnum;
                $idx++;
            }
            return round($filesize,2).' '.$prefix[$idx];
        }else{
            return "NaN";
        }
    }
    // echo getfilesize(700000);

    function getfilesizetwo($filesize){
        // return $filesize;

        $idx = 0;
        $fixnum = 1024;
        $prefix = ['B',"Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

        if($filesize < $fixnum){
            return $filesize. " ".$prefix[$idx];
        }else{
            while($filesize > $fixnum){
                $filesize = round($filesize/$fixnum,2);
                $idx++;
            }
            return $filesize." ".$prefix[$idx];
        }
    }   
    // echo getfilesizetwo(7000);

    function getfilesizethree($filesize){
        $size = filesize($filesize);
        $fixnum = 1024;
        $prefix = ['B',"Kb","Mb","Gb","Tb","Pb","Eb","Zb","Yb"];

        $power = $size > 0 ? floor(log($size,$fixnum)) : 0;
        // log(574,1024) // 0.91649069266757
        // floor(log(574,1024)) // 0

        $result = round($size/pow($fixnum,$power),2) . ' '. $prefix[$power];
        return $result;
    }
    // echo getfilesizethree("./l41userdeleteform.php");

    // -----------------------------------------------------
    // sudo chmod 777 -R assets/
    // $uploaddir = "assets/";
    // $uploadfile = $uploaddir.$_FILES['profile']['name']; // assets/goldenretriever.jpg
    // $uploadfile = $uploaddir.basename($_FILES['profile']['name']); // assets/goldenretriever.jpg

    // echo $uploadfile;

    // move_uploaded_file(temp,actualpathname)

    // if(isset($_POST["submit"])){
    //     if(move_uploaded_file($_FILES["profile"]['tmp_name'],$uploadfile)){
    //         echo "File Successfully Uploaded";
    //     }else{
    //         echo "Try Again";
    //     }
    // }
    // * same filename shouldn't be uploaded on server again because it will overwrite the existing file
    // * we have to change filename for each uploaded file for above reason
    // ---------------------------------------------------------


    // $uploaddir = "/var/www/html/part1/assets/";
    // $uploaddir = "assets/";
    // $uploadfile = $uploaddir.basename($_FILES["profile"]["name"]);
    // $uploadsize = $_FILES["profile"]["size"];

    // if(isset($_POST["submit"])){

    //     if($uploadsize > 30000){
    //         echo "Sorry, Your file is too large";
    //     }else{
    //         if(file_exists($uploadfile)){
    //             echo "Sorry, File already exists.";
    //         }else{
    //             if(move_uploaded_file($_FILES["profile"]["tmp_name"],$uploadfile)){
    //                 echo "File Successfully Uploaded";
    //             }else{
    //                 echo "Try Again";
    //             }
    //         }
    //     }
    // }


    // $uploaddir = "assets/";
    // $uploadfile = $uploaddir.basename($_FILES["profile"]["name"]);
    // $uploadsize = $_FILES["profile"]["size"];
    // $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
    // echo $uploadfile . "<br/>"; //assets/haskey.jpg
    // echo $uploadtype; // .jpg

    // if(isset($_POST["submit"])){

    //     if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "git"){
    //         echo "Sorry, We just allowed for JPG,JPEG,PNG & GIT file types";
    //     }else{
    //         if($uploadsize > 30000){
    //             echo "Sorry, Your file is too large";
    //         }else{
    //             if(file_exists($uploadfile)){
    //                 echo "Sorry, File already exists.";
    //             }else{
    //                 if(move_uploaded_file($_FILES["profile"]["tmp_name"],$uploadfile)){
    //                     echo "File Successfully Uploaded";
    //                 }else{
    //                     echo "Try Again";
    //                 }
    //             }
    //         }
    //     }

        
    // }


    // $uploaddir = "assets/";
    // $uploadfile = $uploaddir.basename($_FILES["profile"]["name"]);
    // $uploadsize = $_FILES["profile"]["size"];
    // $uploadtype = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
    // $uploadready = true;

    // if(isset($_POST['submit'])){
    //     // check file already exists or not
    //     if(file_exists($uploadfile)){
    //         echo "Sorry, file already exists <br/>";
    //         $uploadready = false;
            
    //     }

    //     // check file size
    //     if($_FILES["profile"]["size"] > 30000){
    //         echo "Sorry your file is too large. <br/>";
    //         $uploadready = false;
            
    //     }


    //     // check file format
    //     if($uploadtype !== "jpg" && $uploadtype !== "jpeg" && $uploadtype !== "png" && $uploadtype !== "git"){
    //         echo "Sorry, we just allowed JPG,JPEG,PNG & GIT files <br/>";
    //         $uploadready = false;
            
    //     }


    //     // upload
    //     if($uploadready){
    //         if(move_uploaded_file($_FILES["profile"]["tmp_name"],$uploadfile)){
    //             echo "Uploaded successfully";
    //         }else{
    //             echo "Uploading Failed";
    //         }
    //     }
    // }

    if(isset($_POST["submit"]) && !empty($_FILES["profile"]["name"])){
    //     // echo "Hello";

        $filename = $_FILES["profile"]["name"];
        $filesize = $_FILES["profile"]["size"];
        $filetmp = $_FILES["profile"]["tmp_name"];
        $filetype = $_FILES["profile"]["type"]; // image/jpeg
    
        $uploaddir = "assets/";
        $uploadfile = $uploaddir.basename($filename);
        $uploadtype = strtolower(end(explode(".",$filename))); // jpg

        $allowextensions = ["jpg","jpeg","png","gif"];


        if(isset($_FILES["profile"])){


            $errors = [];

            // check extension
            if(in_array($uploadtype,$allowextensions) === false){
                $errors[] = "Sorry, we just allowed JPG,JPEG,PNG & GIT files type";
            }

            if($filesize > 30000){
                $errors[] = "Sorry, your file is too large.";
            }

            if(empty($errors)){
                move_uploaded_file($filetmp,$uploadfile);
                echo "File successfully uploaded";
            }else{
                echo "<pre>".print_r($errors,true)."</pre>";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Uploading File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

        <div class="col-md-6 mx-auto mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="profile">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control"/>
                </div>
                <input type="submit" name="submit" class="btn btn-primary float-end" value="Upload"/>
            </form>
        </div>
        


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>


<!-- 
    bit
    byte
    kilo byte
    mega byte
    giga byte
    tera byte
    peta byte
    exa byte
    zetta byte
    yotta byte



    8BIT = 1BYTE
    1024BYTE = 1KB
    1000KB = 1MB
    1024MB = 1GB
    1024GB = 1TB



    Petabyte (PB): 1 PB is equal to 1,000 TB or approximately 1,000,000 GB.
    Exabyte (EB): 1 EB is equal to 1,000 PB or approximately 1,000,000,000 GB.
    Zettabyte (ZB): 1 ZB is equal to 1,000 EB or approximately 1,000,000,000,000 GB.
    Yottabyte (YB): 1 YB is equal to 1,000 ZB or approximately 1,000,000,000,000,000 GB.
    
-->

<!-- 
    Why?
    1MB = 1024KB instead of 1000KB
    01 base 2

    2^0 = 2
    2^1 = 2
    2^2 = 4
    2^3 = 8
    2^4 = 16
    2^5 = 32
    2^6 = 64
    2^7 = 128
    2^8 = 256
    2^9 = 512
    2^10 = 1024

    2^0 =1
    2^-1 =1/2
    2^-2 =1/4

    2^3 = 8
    2^2 = (2^3)/2 = 8/2 = 4
    2^1 = (2^2)/2 = 4/2 = 2
    2^0 = (2^1)/2 = 2/2 = 1


 -->

 <!-- 2RT -->