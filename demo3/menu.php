<?php
    $menu = ["Home" => "/ui/",
    "About" => "/ui/about.php"];
    
    foreach($menu as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
    }
?>