<?php


     class  myregular{
          public function __construct(){
               $string = "We are family";

               // echo $string;
                                   //preg_match(delimiter, string)
               // $result = preg_match("We are family",$string); // it is true
               // $result = preg_match("/We are family/",$string);// it is true
               // $result = preg_match("/family/",$string);// it is true
               // $result = preg_match("/mily/",$string);// it is true

               // $result = preg_match("/mily$/",$string);// it is true
               // $result = preg_match("/are$/",$string);// it is false
               // $result = preg_match("/we$/",$string);// it is false
               // $result = preg_match("/family$/",$string);// it is true
               // $result = preg_match("/Family$/",$string);// it is false
               
               // $result = preg_match("/^mily/",$string);// it is false
               // $result = preg_match("%^are%",$string);// it is false
               // $result = preg_match("#^we#",$string);// it is false
               // $result = preg_match("/^We/",$string);// it is true
               // $result = preg_match("+^We+",$string);// it is true
               
               $result = preg_match("-^family$-",$string);// it is false // it's is false Note:: string must be exact 
               $result = preg_match("!^$!",$string);// it is false // it's is false Note:: string must be empty


               $result = preg_match("/^we/",$string);// it is false // it's is false Note:: string must be empty
               $result = preg_match("/^we/i",$string);// it is true // it's is false Note:: string must be empty


               $result = preg_match("/[b-d]/",$string);// it is false 
               $result = preg_match("/[a-f]/",$string);// it is true 
               $result = preg_match("/[a-z]/",$string);// it is true 
               $result = preg_match("/[A-Z]/",$string);// it is true 
               $result = preg_match("/[0-4]/",$string);// it is false 

          
               $string = "my lucky number is 567";

               $result = preg_match("/[0-4]/",$string);// it is false 
               $result = preg_match("/[5-9]/",$string);// it is true
               $result = preg_match("/[a-z]/",$string);// it is true 
               $result = preg_match("/[A-Z]/",$string);// it is false 
               $result = preg_match("/[A-Z]|[a-z]/",$string);// it is true  
               $result = preg_match("/^[a-z]/",$string);// it is true 
               $result = preg_match("/[a-z]$/",$string);// it is false 
               $result = preg_match("/^[5-9]/",$string);// it is false
               $result = preg_match("/[5-9]$/",$string);// it is true

               // myluckynumberis
               $result = preg_match("/[^a-z]/",$string);// it is true (it's mean not include a  to z, result is true cuz)
               $result = preg_match("/[^5-9]/",$string);// it is true (it's mean not include 5  to 9, result is true cuz)
               $result = preg_match("/[^0-4]/",$string);// it is true (it's mean not include 5  to 9, result is true cuz)
          
               $string = "admin@gmail.com";
               $result = preg_match("/@/",$string);// it is true
               $result = preg_match("/m/",$string);// it is true
               $result = preg_match("/m+/",$string);// it is true
               $result = preg_match("/b+/",$string);// it is false
               $result = preg_match("/b*/",$string);// it is true
               $result = preg_match("/b?/",$string);// it is true
               $result = preg_match("/m{1}/",$string);// it is true
               $result = preg_match("/m{2}/",$string);// it is false
               
               $string = "adminn@gmail.com";
               $result = preg_match("/n{1}/",$string);// it is true
               $result = preg_match("/n{2}/",$string);// it is true
               $result = preg_match("/n{3}/",$string);// it is false
               $result = preg_match("/n{2,3}/",$string);// it is false
               $result = preg_match("/n{2,}/",$string);// it is false
               $result = preg_match("/\s/",$string);// it is false


               $string = "V8 Engine";
               $result = preg_match("/\s/",$string);// it is true
               $result = preg_match("/\d/",$string);// it is true
               $result = preg_match("/\D/",$string);// it is true
               $result = preg_match("/\w/",$string);// it is true
               $result = preg_match("/\W/",$string);// it is true


               $string = "528";
               $result = preg_match("/\d/",$string);// it is true
               $result = preg_match("/\D/",$string);// it is false
               $result = preg_match("/\w/",$string);// it is true
               $result = preg_match("/\W/",$string);// it is false


               $string = "adbcminn@gmail.com";
               $result = preg_match("/a\wm/",$string);// it is true
               $result = preg_match("/a\w{1}m/",$string);// it is true
               $result = preg_match("/a\w{2}m/",$string);// it is true. cuz any exact 2 words
               $result = preg_match("/a\w{2,4}m/",$string);// it is true. cuz any exact 2 words
               $result = preg_match("/a\w{2,}m/",$string);// it is true. cuz any exact 2 words

               $result = preg_match("/a.m/",$string);// it is true 
               $result = preg_match("/a..m/",$string);// it is true 
               $result = preg_match("/a.{1}m/",$string);// it is true 
               $result = preg_match("/a.{2}m/",$string);// it is true 
               $result = preg_match("/a.{2,4}m/",$string);// it is true 
               $result = preg_match("/a.{2,}m/",$string);// it is true 
               

               $string = "PHP";
               $result = preg_match("/.{2}/",$string);// it is true 

               $string = "Vvw";
               $result = preg_match("/.{2,}/",$string);// it is true 
               $result = preg_match("/^.{2}$/",$string);// it is true 

               $string = "Welcome to our <i>programming class</i>";
               $result = preg_match("/<i>w*<\/i>/",$string);// it is false, cuz spacing 
               $result = preg_match("/<i>.*<\/i>/",$string);// it is true 
               $result = preg_match("/<i>(.*)<\/i>/",$string);// it is true 


               $string = "php";
               $result = preg_match("/p(hp)*/",$string);// it is true 
               $result = preg_match("/p(hp)+/",$string);// it is true 

               $string = "admin@gmail.com";
               $result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);

               echo $result ? "it is true" : "it is false";


               echo "<hr/>";

               // preg_replace(pattern,replacement,$string)
               $string = "Are you ready to learn PHP Framework";
               $result = preg_replace("/php/i","javascript",$string);
               echo "$result <br/>";

               $result = preg_replace("/\s/","",$string);
               echo "$result <br/>";

               // Bracket Expressions
               $string = "admin123@gmail .com";
               $result = preg_replace("/[[:space:]]/","",$string); // admin123@gmail.com
               echo "$result <br/>";
               
               $result = preg_replace("/[[:space:]]/","x",$string); // admin123@gmailx.com
               echo "$result <br/>";
               
               $result = preg_replace("/[[:alpha:]]/","x",$string); // xxxxx123@xxxxx .xxx
               echo "$result <br/>";

               $result = preg_replace("/[[:digit:]]/","x",$string); // adminxxx@gmail .com
               echo "$result <br/>";


               $result = preg_replace("/[[:alnum:]]/","x",$string); // xxxxxxxx@xxxxx .xxx
               echo "$result <br/>";

               $result = preg_replace("/[[:punct:]]/","x",$string); // admin123xgmail xcom
               echo "$result <br/>";

               $result = preg_replace("/[[:lower:]]/","x",$string); // xxxxx123@xxxxx .xxx
               echo "$result <br/>";

               $result = preg_replace("/[[:upper:]]/","x",$string); //admin123@gmail .com
               echo "$result <br/>";


               $string = "Are you ready to learn PHP Framework";
               $result = preg_replace(["/PHP/","/framework/i"],["Javascript","libraries"],$string);
               echo "$result <br/>"; // Are you ready to learn Javascript libraries

               $string = "My lucky number is 007 but i got ticket number 5700";
               $result = preg_replace("/[0-9]/","x",$string);
               echo "$result <br/>"; // My lucky number is xxx but i got ticket number xxxx

               $result = preg_replace("/[0-9]+/","x",$string);
               echo "$result <br/>"; // My lucky number is x but i got ticket number x
          
                                             // no limit = 0 (or) NULL
               // preg_aplit(pattern,string,limit,flags)

               $string = "My lucky number is 007";
               $result = preg_split("/\s/",$string);
               // echo $result; // Array
               echo "<pre>".print_r($result,true)."</pre>";
               echo "$result[0] <br/>"; // My
               echo "$result[1] <br/>"; // lucky

               $result = preg_split("/\s/",$string,3);
               // echo $result; // Array
               echo "<pre>".print_r($result,true)."</pre>";
               echo "$result[0] <br/>"; // My
               echo "$result[2] <br/>"; // number is 007

               $string = "My lucky number is 007, but i got ticket number 5770";
               
               $result = preg_split("/\s/",$string);
               echo "<pre>".print_r($result,true)."</pre>";

               $result = preg_split("/[\s]/",$string);
               echo "<pre>".print_r($result,true)."</pre>";

               $result = preg_split("/\s,/",$string);
               echo "<pre>".print_r($result,true)."</pre>";

               $result = preg_split("/[\s,]/",$string);
               echo "<pre>".print_r($result,true)."</pre>";

               $result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
               echo "<pre>".print_r($result,true)."</pre>";

               $result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
               echo "<pre>".print_r($result,true)."</pre>";

               // preg_quote()
               $string = "He\'s my father, do you know him?";

               $result = preg_quote($string);
               echo $result;

               echo "<br/>";

               $result = preg_quote($string,"o");
               echo $result;

               // preg_match_all() (pattern,string,return,flags)
               $string = "Winning numbers are 227-000 & 002-777, but my ticket number is 007-222";
               
               preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
               echo "<pre>".print_r($result,true)."</pre>";

               preg_match_all("/\d-\d/",$string,$result,PREG_SET_ORDER);
               echo "<pre>".print_r($result,true)."</pre>";
               
               // lookahead & lookbehind
               // (?=) positive lookahead  (or) regax lookahead = right hand side
               // (?!) negative lookahead = left hand side

               // (?<=) positive lookbehind (or) regax lookbehind 
               // (?<!) negative lookbehind


               $string = "aungkyaw@cisco.com";
               $result = preg_match("/@(?=cisco)/",$string); // it's true (regax lookahead)
               $result = preg_match("/(?<=@)cisco/",$string); // it's true (regax lookahead)

               $result = preg_match("/@(?!cisco)/",$string); // it's true (regax lookahead)
               $result = preg_match("/(?<!@)cisco/",$string); // it's true (regax lookahead)


               echo $result ? "it's true" : "it's false";
               echo "<br/>";

               $strongpassword = "abc#7D";

               $result = preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*([[:punct:]]))/",$strongpassword); // it's true (positive lookahead)
               echo $result ? "it's true" : "it's false";

               
               }
     }

     echo "This is regular expression <br/>";
     $obj = new myregular();

     echo "<hr/>";
?>


<!-- 
     input type="email" 
     -only look for @ sign
     -error output with tooltik

     abc@
     abc@gmail.com 
     abc@mikrotik.com

     -for custom email limitations and error message
-->

<!-- 
     preg_match()
     $ must be in end (case sensitive)
     ^ caret or circumflex, must be in start (case sensitive)
     
     i no case sensitive

     [] range a-z A-Z 0-9
     m+ must contain m and more
     b* contain b or not and more
     b? contain b or not and more

     m{nth} contain sample place m as per nth and more
     m{nth,nth} contain sample place m as per nth and more
     m{nth,} contain sample place m as per nth and more


     \s mean space
     \d mean digit
     \D mean have any no digit
     \w mean any word [a-z]{A-Z} [0-9]
     \W mean any word @#$*
     . mean any characters

     () mean this
     + mean must
     p(hp)* can be contain hp
     p(hp)+ must be contain hp

     [[:space:]] mean space characters
     [[:alpha:]] mean alphabetic characters
     [[:digit:]] mean digit characters
     [[:alnum:]] alphanumeric characters
     [[:punct]]  Punctuation characters
     [[:lower:]] Lower-case characters
     [[:upper:]] Uppser-case characters

-->


<!-- 
a?     Zero or one of a
a*     Zero or more of a
a+     One or more of a
a{3}     Exactly 3 of a
a{3,}     3 or more of a
a{3,6}     Between 3 and 6 of a 
-->
