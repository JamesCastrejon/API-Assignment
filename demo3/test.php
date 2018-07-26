<?php

    //include database connection
    include 'crud/dbconfig.php';

    //query all records from the database
    $query = "select name, cost, description, category from items";

    $name = isset($_GET['name']);
    $cat = isset($_GET['category']);
    $price = isset($_GET['price']);

    if($name != "" || $name != null) {
        $query = 'select name, cost, description, category from items where name like "%'.$_GET['name'].'%"';
    }
    if($cat != "" || $cat != null) {
        $query = 'select name, cost, description, category from items where category like "%'.$_GET['category'].'%"';
    }
    if($price != "" || $price != null) {
        $query = 'select name, cost, description, category from items where cost like "%'.$_GET['price'].'%"';
    }

    //echo "<table>";

    //execute the query
    $result = $mysqli->query( $query );

    //get number of rows returned
    $num_results = $result->num_rows;
    if( $num_results > 0){ //it means there's already at least one database record

        // loop to show each records
        while( $row = $result->fetch_assoc()){

            // THIS IS MY JSON CODE
            $myJSON = json_encode($row);
            echo $myJSON;
            extract($row);
        }
    }else{
    //if database table is empty

    }
    //disconnect from database
    $result->free();
    $mysqli->close();

?>