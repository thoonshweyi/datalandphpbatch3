<?php
    // arrcy_chunk();
    // arrcy_chunk(array,size,preserve key);


    $couples = ["aung aung","su su","nu nu","kyaw kyaw","mya mya","tun tun","maung maung","yin yin"];
    // echo "<pre>".print_r($couples,"true")."</pre>";
    echo "<pre>".print_r(array_chunk($couples,2),"true")."</pre>";
    echo array_chunk($couples,2)[0][1]; //su su

    echo "<pre>".print_r(array_chunk($couples,2,true),"true")."</pre>"; // indexes are related (0 1 2 3 4 5 6)
    echo "<pre>".print_r(array_chunk($couples,2,false),"true")."</pre>"; // indexes are not related 01 01 01 01

    echo "<hr/>";

?>

<!-- 17AM -->