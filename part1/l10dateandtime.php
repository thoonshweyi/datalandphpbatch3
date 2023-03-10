<?php

    date_default_timezone_set("Asia/Yangon");
    //php.net > List supported Timezones > Asia


    $getdate = getdate();
    echo $getdate;
    echo "<br/>";
    var_dump($getdate);
    echo "<br/>";

    echo "This is second = ".$getdate['seconds']."<br/>";
    echo "This is minute = ".$getdate['minutes']."<br/>";
    echo "This is hours = ".$getdate['hours']."<br/>";

    echo "This is wday = ".$getdate['wday']."<br/>";// 5 // day of the week sun = 0;mon = 1
    echo "This is yday = ".$getdate['yday']."<br/>";// 61 // day of the year
    echo "This is weekday = ".$getdate['weekday']."<br/>";// Friday 
    
    echo "This is mon = ".$getdate['mon']."<br/>";// 3
    echo "This is month = ".$getdate['month']."<br/>";// March
    echo "This is mday = ".$getdate['mday']."<br/>";// 3
    
    echo "This is year = ".$getdate['year']."<br/>";// 2023
    

    echo "This is 0 = ".$getdate['0']."<br/>";// 1677841462

    $time = time();
    echo "This is time = ".$time."<br/>"; //1677842016

    // DATE/TIME Format
    // date(format,timestamp);

    $date = date("a",$time);
    echo "This is format a = ".$date."<br/>"; // am / pm
    $date = date("A",$time);
    echo "This is format A = ".$date."<br/>";// AM / PM 

    $date = date("d",$time);
    echo "This is format d = ".$date."<br/>";// 03 // day leading zero
    $date = date("D",$time);
    echo "This is format D = ".$date."<br/>";// Fri // Sun/Mon
    
    $date = date("F",$time);
    echo "This is format F = ".$date."<br/>";// March // January/December

    $date = date("g",$time);
    echo "This is format g = ".$date."<br/>";// 5 // hour by number ( by 12hr format, no leading zero)
    $date = date("G",$time);
    echo "This is format G = ".$date."<br/>";// 17 // hour by number ( by 24hr format, no leading zero)

    $date = date("h",$time);
    echo "This is format h = ".$date."<br/>";// 05 // hour by number ( by 12hr format, leading zero)
    $date = date("H",$time);
    echo "This is format H = ".$date."<br/>";// 17 // hour by number ( by 12hr format, leading zero)

    $date = date("i",$time);
    echo "This is format i = ".$date."<br/>";// 58 minutes

    $date = date("j",$time);
    echo "This is format j = ".$date."<br/>";// 3 day of month no leading zero 

    $date = date("l",$time);
    echo "This is format l = ".$date."<br/>";// Friday
    $date = date("L",$time);
    echo "This is format L = ".$date."<br/>";// 0 //Leap Year(1 = true, 0 = false)

    $date = date("m",$time);
    echo "This is format m = ".$date."<br/>";// 03 day of month leading zero
    $date = date("M",$time);
    echo "This is format M = ".$date."<br/>";// Mar (Jan/Feb)

    $date = date("n",$time);
    echo "This is format n = ".$date."<br/>";// 3 day of month no leading zero

    $date = date("r",$time);
    echo "This is format r = ".$date."<br/>";// Fri, 03 Mar 2023 18:07:31 +0630

    $date = date("s",$time);
    echo "This is format s = ".$date."<br/>";// 47seconds

    $date = date("U",$time);
    echo "This is format U = ".$date."<br/>";// 1677843518

    $date = date("y",$time);
    echo "This is format y = ".$date."<br/>";//23
    $date = date("Y",$time);
    echo "This is format Y = ".$date."<br/>";//23

    $date = date("z",$time);
    echo "This is format z = ".$date."<br/>";//61 days of year

    echo "<hr/>";
?>

<!-- 3TT -->