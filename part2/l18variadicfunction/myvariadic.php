<?php
    
    
     // Spread Operator (...)
     function sumresult($num1,$num2,$num3){
          return $num1+$num2+$num3;
     }
     // echo sumresult(1,2,3);
     echo "<br/>";

     // echo sumresult([1,2,3]);
     echo sumresult(...[1,2,3]);
     echo "<br/>";

     // => func_get_args()

     function totalresult(){


          $arrs = func_get_args();
          // echo $arrs;
          // echo "<pre>".print_r($arrs,true)."<pre/>";
          // echo count($arrs); // 3
          
          $total = 0;
          for($i=0; $i < count($arrs); $i++){
               $total += $arrs[$i];
          }
          return $total; // 60
     }

     echo totalresult(10,20,30);
    
    
     function getval($val1,$val2,$val3){
          echo "Val1 result is = ${val1} <br/>";
          echo "Val2 result is = ${val2} <br/>";
          echo "Val3 result is = ${val3} <br/>";
     }
     echo getval("aung aung","maung maung","kyaw kyaw");
     // echo getval(["red","green","blue"]);
     echo getval(...["red","green","blue"]);

     echo "<hr/>";

     // => Spread Operator In Array
     $phones = ["apple","oppo","vivo","samsung"];
     $cars = ["toyota","suzuki","mazda"];
     $computer = ["mac","aoc","acer"];

     $myowns = [$phones,$cars,$computer];
     echo "<pre>".print_r($myowns,true)."</pre>"; // mullti dimentional array

     $yourowns = [...$phones,...$cars,...$computer];
     echo "<pre>".print_r($yourowns,true)."</pre>"; // manual array


     echo "<hr/>";

     echo "This is Variadic Function <br/>";
     
     
     function myfun1($val){
          return $val;
     }
     // echo myfun1("mango"); // mango
     // echo "<br/>";
     // echo myfun1("mango","orange"); // mango
     // echo "<br/>";


     echo "<hr/>";

     function myfun2(...$val){
          return $val;
     }
     echo myfun2("mango"); // mango
     echo "<br/>";
     echo myfun2("mango","orange"); // mango
     echo "<br/>";

     echo "<pre>".print_r(myfun2(100,200,300),true)."</pre>"; // manual array
     echo "<pre>".print_r(myfun2(["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";
     echo "<pre>".print_r(myfun2("red","geen","blue",["aung aung","kyaw kyaw"],["su su","nu nu"]),true)."</pre>";


     function myfun3(...$val){
          echo $val[1]."<br/>";
     }
     myfun3("maung maung","aung aung","zaw zaw"); // aung aung
     myfun3(["maung maung","aung aung","zaw zaw"],"su su"); // su su
     

     function myfun4(...$val){
          return $val[2]. $val[0][2]. $val[1];

     }
     echo myfun4(["maung maung","aung aung","zaw zaw"],"is my elder brother","Mr.");

     echo "<br/>";

     function myfun5(string $name,int ...$age):string{
          return "${name} is ${age[0]} years old <br/>";
     }
     echo myfun5("su su",25); // su su is 25 years old
     echo "<hr/>";

     function myfun6(int ...$numbers):int{
          return array_sum($numbers);
     }
     echo myfun6(1,2,3);
     echo "<hr/>";


     // => null coalescing operator (??)

     function myfun7(...$val){
          echo $val[1] ? "Vaild Data" : "No Data";
          echo "<br/>";

          echo $val[1] ?? "No Data";
          echo "<br/>";
     }
     myfun7("Hello World","Dream World"); // Valid Data Dream World
     myfun7("Hello World"); // No Data No Data
     echo "<hr/>";
?>