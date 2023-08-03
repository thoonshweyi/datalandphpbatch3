<?php
     // echo "hay";
     class constantvsproperties{
          const ARTICLE = "This is new article for SPORT";
          const TOPIC = "This is new topic fro SPORT";
          
          // *
          // public $post = "This is new post for SPORT";  // baby>contentone result = POLITICAL
          // protected $post = "This is new post for SPORT";  // baby>contentone result = POLITICAL
          private $post = "This is new post for SPORT"; // baby>contentone result = SPORT


          public function contentone(){
               echo self::ARTICLE;
               echo "<br/>";
               echo static::ARTICLE;
               echo "<br/>";
               echo $this->post;
               echo "<br/>";
          }
     }

     class baby extends constantvsproperties{
          const ARTICLE = "This is new article for POLITICAL";
          const TOPIC = "This is new topic fro POLITICAL";
          
          public $post = "This is new post for POLITICAL";

          public function contenttwo(){
               echo self::ARTICLE;
               echo "<br/>";
               echo static::ARTICLE;
               echo "<br/>";
               echo $this->post;
               echo "<br/>";
          }
     }

     echo "This is Constant vs Properties"."<br/>";
     
     $obj = new constantvsproperties();
     $obj->contentone();
     // This is new article for SPORT
     // This is new article for SPORT
     // This is new post for SPORT

     echo "<br/>";

     $obj = new baby();

     $obj->contentone();
     // This is new article for SPORT
     // This is new article for POLITICAL
     // This is new post for POLITICAL
     echo "<br/>";


     $obj->contenttwo();
     // This is new article for POLITICAL
     // This is new article for POLITICAL
     // This is new post for POLITICAL

    
     echo "<hr/>";
?>
