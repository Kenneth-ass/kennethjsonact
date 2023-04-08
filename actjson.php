<?php
    header('Access-Control-Allow-Origin: *');
  
    $tourist = [
        [   
            "img" => "Boracay.png",
            "name" => "Philippines",
            "location" => "Aklan",
            "touristspot" => "Boracay",
            "act" => "Activities",
            "activities" => ["Jet Ski ride","Parasailing","Island Hopping","Scuba Diving",]
        ],
         [   
            "img" => "Eiffel.jpg",
            "name" => "Paris",
            "location" => "France",
            "touristspot" => "Eiffel tower",
            "act" => "Activities",
            "activities" => ["Guided Tour and Optional River Cruise","Eiffel Tower Climbing Experience","Dinner at Eiffel Tower's Madame Brasserie with Paris View",">Elevator Tour of Eiffel Tower with Optional Summi",]
        ],
         [   
            "img" => "Niagara.jpg",
            "name" => "United State",
            "location" => "New York",
            "touristspot" => "Niagara Falls",
            "act" => "Activities",
            "activities" => ["Fallsview waterpark","Niagara zipline","Greg Frewin Theatre","Queen Victoria parks",]
        ],
         [   
            "img" => "Peru.jpg",
            "name" => "Peru",
            "location" => "Southwestern Peru",
            "touristspot" => "Saab Bofors Dynamics",
            "act" => "Activities",
            "activities" => ["Eating Competiton","Sandboarding","Dune Buggy","Different unique foods to eat",]
        ],
         [   
            "img" => "Albanian.jpg",
            "name" => "Southwestern Albania",
            "location" => "Northeastern Ionian",
            "touristspot" => "Albanian Riviera",
            "act" => "Activities",
            "activities" => ["Swimming","Sight seeing","Island Hopping","Scuba Diving",]
        ],
      
    ];

    $data = json_encode($tourist);
    echo $data;
    
?>