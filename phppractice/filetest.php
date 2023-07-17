<?php
     // $filesize = filesize("file1.txt");
     // echo "$filesize";

     // => File Read
     // $fileopen = fopen("file2.txt","r");

     // if($fileopen){
     //      echo "OKI";
     // }else{
     //      echo "File Not Found.";
     // }

     // => File Write
     // $fileopen = fopen("file2.txt","w");

     // if($fileopen){
     //      echo "OKI";
     // }else{
     //      echo "File Not Found.";
     // }

     // => File using "x"
     // $fileopen = fopen("file3.txt","x");
     // if($fileopen){
     //      // echo "OKI";
     //      fwrite($fileopen,"Hello Guys !!! I created new file by using x");

     //      $fileopen = fopen("file3.txt","r");
     //      $fileread = fread($fileopen,filesize("file3.txt"));
     //      echo $fileread;

     //      fclose($fileopen);
     // }else{
     //      echo "File Not Found.";
     // }

     // => File using "c/c+"
     // $fileopen = fopen("file4.txt","c");
     // if($fileopen){
     //      // echo "OKI";
     //      fwrite($fileopen,"Hello Guys !!! I created new file by using c/c+.");

     //      $fileopen = fopen("file4.txt","c+");
     //      $fileread = fread($fileopen,filesize("file4.txt"));
     //      echo $fileread;

     //      fclose($fileopen);
     // }else{
     //      echo "File Not Found.";
     // }
     // Hello guys!!! I created new file by using c/c+.
     // I created new file by using c/c+.

     // Hello guys!!! I created new file.
     // I created new file.

     // => Double fwrite()
     // $fileopen = fopen("file5.txt","w");

     // if($fileopen){ 
     //      $message = "Welcome to our class. \n";
     //      fwrite($fileopen,$message);

     //      $message = "Thank you for using php file system.";
     //      fwrite($fileopen,$message);

     //      $fileopen = fopen("file5.txt","r");
     //      $fileread = fread($fileopen,filesize("file5.txt"));
     //      echo $fileread;

     //      fclose($fileopen);
     // }else{
     //      echo "File Not Found";
     // }

     // => File using "a"
     // $fileopen = fopen("file6.txt","a");

     // if($fileopen){ 
     //      $message = "Welcome to our class.\n";
     //      fwrite($fileopen,$message);

     //      $message = "Thank you for using php file system.\n";
     //      fwrite($fileopen,$message);

     //      $fileopen = fopen("file6.txt","r");
     //      $fileread = fread($fileopen,filesize("file6.txt"));
     //      echo $fileread;

     //      fclose($fileopen);
     // }else{
     //      echo "File Not Found";
     // }

     // => Other file functions
          // => file_get_contents() 
          // echo file_get_contents("file1.txt");
          
          // => file_put_contents()
          // $existingfile = "file1.txt";
          // $newfile = "file7.txt";

          // $message = file_get_contents($existingfile);
          // $message .= "\nThank you for using php file system. \n \n";

          // file_put_contents($newfile,$message);

          // =>file_exists()
          // $existingfile = "file1.txt";
          // $newfile = "file7.txt";

          // if(file_exists($existingfile)){
          //      $message = file_get_contents($existingfile);
          //      $message .= "\nThank you for using php file system. \n \n";
     
          //      file_put_contents($newfile,$message);
          // }else{
          //      echo "File Not Found";
          // }

          // copy()
          // $file = "file1.txt";
          // copy($file,"file8.txt");
          // echo file_get_contents("file8.txt");

          // rename()
          // $file = "file8.txt";
          // rename($file,"file9.txt");
          // echo file_get_contents("file9.txt");

         
          // unlink()
          // $file = "file9.txt";
          // if(file_exists($file)){
          //      unlink($file);
          // }else{
          //      echo "File Not Found";
          // }

          // Show Files
          // echo glob("*.txt");
          echo "<pre>".print_r(glob("*.txt"),true)."</pre>";
?>