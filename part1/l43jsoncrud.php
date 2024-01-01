<?php
     $getdatas = file_get_contents("./l43studentsdb.json");
     $datasde = json_decode($getdatas,true); // array
     // echo "<pre>".print_r($datasde,true)."</pre>";

     // =>Read
     // foreach($datasde as $datas){
     //      // echo "<pre>".print_r($datas,true)."</pre>";

     //      foreach($datas as $key=>$data){
     //           echo $key." = ". $data."<br/>";
     //      }

     //      echo "<hr/>";
     // }


     // => Create
     $newdatas = [
          [
               "id"=>11,
               "name"=> "linn linn",
               "city" => "mandalay"
          ],
          [
               "id"=>12,
               "name"=> "phyu phyu",
               "city" => "yangon"
          ],
          [
               "id"=>13,
               "name"=> "win win",
               "city" => "bago"
          ],
     ];
      
     // sudo chmod 777 -R l43studentsdb.json
     // foreach($newdatas as $newdata){
     //      array_push($datasde,$newdata);
     //      file_put_contents("./l43studentsdb.json",json_encode($datasde));
     // }

     // foreach($datasde as $datas){

     //      foreach($datas as $key=>$data){
     //           echo $key." = ". $data."<br/>";
     //      }

     //      echo "<hr/>";
     // }

     // =>Update
     foreach($datasde as $key=>$datas){
          // echo $datas;
          // echo "<pre>".print_r($datas,true)."</pre>";
          // echo $key; // index 0 to 12
          // echo "<pre>".print_r($datasde[$key],true)."</pre>";
          // echo $datas['id'];

          if($datas['id'] === 9){
               // id
               $datasde[$key]["name"] = "thandar";
               
               // index
               // $datasde[8]["name"] = "sandar";
          }
     }

     // file_put_contents("./l43studentsdb.json",json_encode($datasde));

     // foreach($datasde as $datas){

     //      foreach($datas as $key=>$data){
     //           echo $key." = ". $data."<br/>";
     //      }

     //      echo "<hr/>";
     // }

     // => Delete

          // $colors = ["red","green","blue"];
          // unset($colors[1]);
          // $colors = array_values($colors); // can reset index number 0 2 to 0 1
          // echo "<pre>".print_r($colors,true)."</pre>";

          // $infos = ["name"=>"aung aung","age"=>20,"city"=>"yangon"];
          // unset($infos["name"]);
          // $infos = array_values($infos); // [0] => 20 [1] => yangon
          // echo "<pre>".print_r($infos,true)."</pre>";

          $idxs = [];

          foreach($datasde as $key=>$datas){
               // echo "<pre>".print_r($datas,true)."</pre>";
               if($datas['id'] === 13){
                    $idxs[] = $key;
                    // echo "<pre>".print_r($datas,true)."</pre>";
               }
          }

          foreach($idxs as $idx){
               unset($datasde[$idx]);
          }
          // $datasde = array_values($datasde);
          echo "<pre>".print_r($datasde,true)."</pre>";



          file_put_contents("./l43studentsdb.json",json_encode($datasde));

          foreach($datasde as $datas){

               foreach($datas as $key=>$data){
                    echo $key." = ". $data."<br/>";
               }

               echo "<hr/>";
          }


          

?>