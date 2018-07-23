<?php
    $name = ["Mushroom" => "/class/demo2?name=Mushroom",
    "Pepper" => "/class/demo2?name=Pepper",
    "Herb" => "/class/demo2?name=Herb"];

    $cost = ["5" => "/class/demo2?price=5",
    "7" => "/class/demo2?price=7",
    "15" => "/class/demo2?price=15",
    "30" => "/class/demo2?price=30"];
    
    $cat = ["Heal" => "/class/demo2?category=Heal",
    "Damage" => "/class/demo2?category=Damage",
    "Buff" => "/class/demo2?category=Buff",
    "Debuff" => "/class/demo2?category=Debuff",
    "Unbuff" => "/class/demo2?category=Unbuff"];
    echo "<p>Name</p>";
    foreach($name as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
    }
    echo "<p>Cost</p>";
    foreach($cost as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
    }
    echo "<p>Categories</p>";
    foreach($cat as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
    }
?>