<?php
     // Heirarchical inheritance

     // class sitelogin{
     //      public $fullname = "Honey Nay Oo";
     //      public $email = "honey@gmail.com";
     //      public $password = "123456";
          

     //      public function useraccess(){
     //           echo "This is site login. Email is $this->email  & Password is $this->password";
     //      }

     //      public function userinfo(){
     //           echo "Profile name is $this->fullname";
     //      }
     // }

     // class devlogin extends sitelogin{
     //      public function githublogin(){
     //           echo "This is Github login. Email is $this->email  & Profile name is $this->fullname";

     //      }
     // }

     // class mytrait extends devlogin{

     // }
     // --------------------
     // trait

     trait sitelogin{
          public $fullname = "Honey Nay Oo";
          public $email = "honey@gmail.com";
          public $password = "123456";
          

          public function useraccess(){
               echo "This is site login. Email is $this->email  & Password is $this->password. <br/>";
          }

          public function userinfo(){
               echo "Profile name is $this->fullname. <br/>";
          }
     }

     trait devlogin{
          public function githublogin(){
               echo "This is Github login. Email is $this->email  & Profile name is $this->fullname <br/>";

          }
     }

     class googleauth{
          // Method 3
          // use sitelogin, devlogin;

          public function gmaillogin(){
               echo "This is Gmail login. Email is $this->email  & Profile name is $this->fullname <br/>";

          }
     }

     trait maintrait{
          // Method 4
          use sitelogin, devlogin;

     }

     class mytrait extends googleauth{
          // Method 1
          // use sitelogin;
          // use devlogin;

          // Method 2
          // use sitelogin, devlogin;

          // Method 3
          // *use trit in parent class

          // Method 4
          use maintrait;
     }
     

     echo "This is Trait."."<br/>";

     // $obj = new mytrait();
     // echo $obj->fullname; // Honey Nay Oo
     // echo '<br/>';
     // echo $obj->email; // honey@gmail.com
     // echo '<br/>';
     // echo $obj->password; // 123456
     // echo '<br/>';

   
     // $obj->useraccess(); // This is site login. Email is honey@gmail.com & Password is 123456
     // $obj->userinfo(); // Profile name is Honey Nay Oo
     
     // $obj->githublogin(); 
     // sitelogin > devlogin > mytrait
     
     // sitelogin > 
     //   $fullname
     //   $email
     //   $password
     //   useraccess()
     //   userinfo()

     // devlogin > 
     //   githublogin()

     // mytrait
     // *mytrait will get all properties and methods from both class because of hierarchical inheritance 
     // --------------------

     $obj = new mytrait();
     echo $obj->fullname; // Honey Nay Oo
     echo '<br/>';
     echo $obj->email; // honey@gmail.com
     echo '<br/>';
     echo $obj->password; // 123456
     echo '<br/>';

     $obj->useraccess(); // This is site login. Email is honey@gmail.com & Password is 123456
     $obj->userinfo(); // Profile name is Honey Nay Oo

     $obj->githublogin(); 
     $obj->gmaillogin(); 


     echo "<hr/>";

    
?>