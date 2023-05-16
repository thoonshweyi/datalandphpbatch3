<?php

    $items = [
        [
            "id" => 4,
            "qty" => 2
        ],
        [
            "id" => 3,
            "qty" => 1
        ],
        [
            "id" => 1,
            "qty" => 3
        ],
        [
            "id" => 4,
            "qty" => 4
        ]
    ];

    $itemsde = json_encode($items);
    echo "<pre>".$itemsde."</pre>";

    echo "<hr/>";

    $myobj = [
        "name" => "aung aung",
        "age" => 25,
        "city" => "yangon"
    ];
    $myobjde = json_encode($myobj);
    echo "<pre>".$myobjde."</pre>";

?>