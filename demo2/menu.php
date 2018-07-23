<?php
    $menu = ["Home" => "/class/demo2",
    "About" => "/class/demo2/about"];
    
    foreach($menu as $key => $value) {
        echo "<a href=".$value.">".$key."</a>";
    }
?>