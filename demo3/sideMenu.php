<?php
    $name = ["Mushroom" => "/ui?name=Mushroom",
    "Pepper" => "/ui?name=Pepper",
    "Herb" => "/ui?name=Herb"];

    $cost = ["5" => "/ui?price=5",
    "7" => "/ui?price=7",
    "15" => "/ui?price=15",
    "30" => "/ui?price=30"];
    
    $cat = ["Heal" => "/ui?category=Heal",
    "Damage" => "/ui?category=Damage",
    "Buff" => "/ui?category=Buff",
    "Debuff" => "/ui?category=Debuff",
    "Unbuff" => "/ui?category=Unbuff"];
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