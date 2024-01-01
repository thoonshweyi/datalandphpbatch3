<?php

     interface encrypt{

          public function setpasscode($plaintext);
          public function passworddef();
          public function passwordbcr();
          public function passwordvry();

          public function passwordrehash();

          public function strongpassword();

          public function getciphermethod();
          public function customcrypt();
          public function customdecrypt();

          public function gethashingalgorithm();
          public function customstrongcrypt();
          public function customstrongdecrypt();
     }

     // password_hash(string,mixed)
     // =keywords
     // PASSWORD_DEFAULT
     // PASSWORD_BCRYPT

     class myencryption implements encrypt{
          
          private $passcode;

          public function setpasscode($plaintext){
               $this->passcode = $plaintext;
          }
          
          public function passworddef(){

               $newpassword = password_hash($this->passcode,PASSWORD_DEFAULT);
               echo "Before encrypt $this->passcode <br/> After encrypt $newpassword <br/>";
               echo strlen($newpassword)."<br/>";
          }
          public function passwordbcr(){
               $newpassword = password_hash($this->passcode,PASSWORD_BCRYPT);
               echo "Before encrypt $this->passcode <br/> After encrypt $newpassword <br/>";
               echo strlen($newpassword)."<br/>";
          
          }
          
          public function passwordvry(){
          // => Decryption
               // password_verify(string,hash);

               $plaintextone = "password123";
               $enccodeone = password_hash($plaintextone,PASSWORD_DEFAULT);
               echo "password hash with PASSWORD_DEFAULT = ".$enccodeone;
               echo "<br/>";

               $plaintexttwo = "password12345";
               $enccodetwo = password_hash($plaintexttwo,PASSWORD_BCRYPT);
               echo "password hash with PASSWORD_BCRYPT = ".$enccodeone;
               echo "<br/>";
               
               // $verify = password_verify($plaintextone,$enccodeone); 
               // $verify = password_verify($plaintexttwo,$enccodeone); 
               $verify = password_verify($plaintexttwo,$enccodetwo); 


               // *password_hash() change enctypted text every time. It is not possible to match the two hashed password.

               if($verify){
                    echo "OKI";
               }else{
                    echo "Failed";
               }
          }

          public function passwordmd5(){
               // Message-Digest
               // => md5(string,raw)
               // NOTE:: Raw Optional. (TRUE/true,FALSE/false)
               // TRUE/true = Raw 16 characters binary format
               // FALSE/false = DEFAULT. 32 Character hax number (combination of characters and numbers)
               
               $passcode = "howareyou";
               echo "Before encrypt with md5 = ".$passcode."<br/>";
               echo "After encrypt with md5 = ".md5($passcode)."<br/>";
               echo "After encrypt with md5 by FALSE = ".md5($passcode,FALSE)."<br/>";
               echo "After encrypt with md5 by TRUE = ".md5($passcode,TRUE)."<br/>";

               // $getpassword = "b47123e4109e6839adb7ae2a28300d96";
               // $getpassword = "�q#��h9���*(0 �";
               
               $getpassword = md5($passcode,true);
               
               if($getpassword === md5($passcode)){
                    echo "Password Match with md5 32 chars hax number";
               }elseif($getpassword === md5($passcode,TRUE)) {
                    echo "Password Match with md5 16 RAW chars binary format"; // can't match cuz it's binary code
               }else{
                    echo "Password do not match";
               }
          }

          public function passwordsha1(){
               
               // Secure Hash Algorighm
               // =>sha(string,raw)
               // NOTE:: Raw Optional. (TRUE/true,FALSE/false)
               // TRUE/true = Raw 20 characters binary format
               // FALSE/false = DEFAULT. 40 Character hax number (combination of characters and numbers)
               
               $passcode = "goodluck";
               echo "Before encrypt with sha1 = ".$passcode."<br/>";
               echo "After encrypt with sha1 = ".sha1($passcode)."<br/>";
               echo "After encrypt with sha1 by FALSE = ".sha1($passcode,FALSE)."<br/>";
               echo "After encrypt with sha1 by TRUE = ".sha1($passcode,TRUE)."<br/>";
          
               //  $getpassword = "748ad6ccd32e4e52718445bb1cadc01eb08a0df6";
               //  $getpassword =  "t����.NRq�E����� �";           

               $getpassword = sha1($passcode,true);

               if($getpassword === sha1($passcode)){
                    echo "Password Match with md5 40 chars hax number";
               }elseif($getpassword === sha1($passcode,TRUE)) {
                    echo "Password Match with md5 20 RAW chars binary format"; // can't match cuz it's binary code
               }else{
                    echo "Password do not match";
               }
          }

          public function passwordcrypt(){
               // => crypt(string,key)

               $passcode = "ilovemyjob";
               $cryptkey = "12345abcde";
               $cryptkey = "12345abcdefg";

               echo "Before encrypt with crypt = ".$passcode."<br/>";
               echo "After encrypt with crypt = ".crypt($passcode,$cryptkey)."<br/>";
          
               $getpassword = "12HfyUaX52St6";
     
               if($getpassword === crypt($passcode,$cryptkey)){
                    echo "Password Match";
               }else{
                    echo "Password do not match";
               }
          }
          

          public function strongpassword(){
               $passcode = "ilovemyjob";

               $newpassword = md5($passcode);
               $newpassword = sha1($newpassword);
               $newpassword = crypt($newpassword,$newpassword);

               echo "Before encrypt = ".$password."<br/>";
               echo "After encrypt = ".$newpassword."<br/>";
               echo "After encrypt by single line =".md5(sha1(crypt($passcode,$passcode)))."<br/>";


               $getpassword = "";

               if($getpassword === md5(sha1(crypt($passcode,$passcode)))){
                    echo "Password Match";
               }else{
                    echo "Password do not match";
               }
          }

          public function passwordrehash(){
               $plaintext = "password123";
               $enccode = password_hash($plaintext,PASSWORD_DEFAULT);
               echo "password hash with PASSWORD_DEFAULT = ".$enccode."<br/>";

               if(password_needs_rehash($enccode,PASSWORD_DEFAULT,["cost"=>10])){
                    echo "Need to rehash";
                    $rehashed = password_hash($enccode,PASSWORD_DEFAULT,["cost"=>12]);
                    echo $rehashed;
               }else{
                    echo "No Need to rehash";
               }

          }

          public function getciphermethod(){
               $ciphers = openssl_get_cipher_methods();
               echo "<pre>".print_r($ciphers,true)."</pre>";
          }
          public function customcrypt(){
               // *can use for security question
               
               // Scenario 
               // Software ask secirity question about favourite color, pet name, mother's first name, etc.
               // User forgot the given answer and request.
               // IT team can send email for answer requests.

               // openssl_encrypt(p,c,p,o,iv); pcpo4
               // openssl_encrypt(plaintext,cipher,passphrase,options,initialization vector);

               $plaintext = "ilovemyfriend";
               echo "Before Encrypt = ".$plaintext."<br/>";

               // cipher method
               $cipher = "aes-128-cbc";

               // passphrase (encryption key)
               $encryptionkey = "abcdefg12345";

               // option
               $option = 0; // OPENSSL_ZRRO_PADDING is equal to 0 // or OPENSSL_RAW_DATA


               $iv = "12345678910";

               $finalencrypt = openssl_encrypt($plaintext,$cipher,$encryptionkey,$option,$iv);

               echo "After Encrypt = ".$finalencrypt."<br/>";
               
               echo strlen($finalencrypt)."<br/>"; // 24
               // * depend on the usage of cipher method the encrypted text can change its length.
          
               
          }

          public function customdecrypt(){
               // openssl_decrypt(h,c,p,o,iv);
               // openssl_encrypt(hash,cipher,passphrase,options,initialization vector);

               $encrypted = "xqo4hgGDlVXzu2DiKnto3Q==";

               // cipher method
               $cipher = "aes-128-cbc";

               // passphrase (encryption key)
               $encryptionkey = "abcdefg12345";

               // option
               $option = 0;

               $iv = "12345678910";

               $finaldecrypt = openssl_decrypt($encrypted,$cipher,$encryptionkey,$option,$iv);

               echo "After Decrypt = ".$finaldecrypt."<br/>";
          }

          public function gethashingalgorithm(){
               $hashalgorithms = hash_hmac_algos(); // keyed-hash message authentication
               echo "<pre>".print_r($hashalgorithms,true)."</pre>";
          }

          public function customstrongcrypt(){
               // openssl_encrypt(p,c,p,o,iv)

               $plaintext = "ilovemyfriend";
               echo "Before Encrypt = ".$plaintext."<br/>";

               $cipher = "aes-128-ctr";

               $encryptionkey = "abcdefg12345";

               $option = OPENSSL_ZERO_PADDING;

               $ivlen = openssl_cipher_iv_length($cipher); // is an arbitrary number
               // echo $ivlen."<br/>";

               $iv = openssl_random_pseudo_bytes($ivlen);
               // echo $iv."<br/>";

               $hash = openssl_encrypt($plaintext,$cipher,$encryptionkey,$option,$iv);

               // echo "After Encrypt = ".$hash."<br/>";

               // hash_hmac(a,h,p,b)
               // hash_hmac(algorithm,hash,passphrase,binary)

               $hmac =  hash_hmac("sha256",$hash,$encryptionkey,true); // just use true, true = raw binary data, flase lowercase hashnumber
               echo $hmac."<br/>";
               echo strlen($hmac)."<br/>"; // 32

               // $finalencrypt = base64_encode($hmac);
               $finalencrypt = base64_encode($iv.$hmac.$hash);
               echo strlen($finalencrypt)."<br/>"; // 44

               echo "After encrypt = ".$finalencrypt."<br/>";
          }

          public function customstrongdecrypt(){
               //     openssl_decrypt(e,c,p,o,iv);

               $encrypted = base64_decode(" bI6K5C3QuzOvT/Gv+DKLw3njdujBotby0tchog1V2430zzBP5v+Kd1Tcn1Bplrj5eXNWVmN2aWsvWEw5T1NkbUp3PT0=");
               // echo $encrypted."<br/>";

               $cipher = "aes-128-ctr";

               $encryptionkey = "abcdefg12345";

               $option = 0;

               $ivlen = openssl_cipher_iv_length($cipher); // is an arbitrary number
               // echo $ivlen."<br/>";

                    // substr(e,start,end)
               $iv = substr($encrypted,0,$ivlen); 
               echo $iv."<br/>";

               $algolen = 32;
                              // 16+32 = 48
               $gethash = substr($encrypted,$ivlen+$algolen);
               echo $gethash."<br/>";
               echo strlen($gethash)."<br/>"; // 20

               $finaldecrypt = openssl_decrypt($gethash,$cipher,$encryptionkey,$option,$iv);
               echo "After Decrypt = ".$finaldecrypt."<br/>";
          }
     }

     echo "This is Encrypt <br/>";
     $obj = new myencryption();
     $obj->setpasscode("password123");
     $obj->passworddef(); // hashed password change every time.
     $obj->passwordbcr(); // hashed password change every time.
     echo "<hr/>";
     
     $obj->passwordvry();
     echo "<hr/>";

     $obj->passwordmd5();
     echo "<hr/>";
     $obj->passwordsha1();
     echo "<hr/>";
     $obj->passwordcrypt();
     echo "<hr/>";

     
     

     // $obj->getciphermethod();
     // echo "<hr/>";

     // $obj->customcrypt();
     // echo "<hr/>";
     
     // $obj->customdecrypt();
     // echo "<hr/>";

     // $obj->gethashingalgorithm();
     // echo "<hr/>";

     // $obj->customstrongcrypt();
     // echo "<hr/>";

     
     // $obj->customstrongdecrypt();
     // echo "<hr/>";

?>

<!-- 29SD -->