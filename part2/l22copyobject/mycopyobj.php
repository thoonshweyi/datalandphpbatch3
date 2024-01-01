<?php

     class news{
        public $article;
        public function __construct($val){
          $this->article = $val;
        }
     }

     function copyobject(news $obj1,news $obj2){
          $obj2->article = $obj1->article;
     }

     echo "This is Copy Objects <br/>";

     $news1 = new news("This is first article");
     $news2 = new news("This is second article");

     echo $news1->article;
     echo "<br/>";
     echo $news2->article;
     echo "<br/>";

     copyobject($news1,$news2);
     echo $news2->article;
     echo "<br/>";

     echo "<hr/>";
?>