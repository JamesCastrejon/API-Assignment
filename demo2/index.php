<?php $location = "Home"; ?>
<?php include "header.php"; ?>
<div class="container">
    <div id="nav">
        <h1><?php include "headerTitle.php"; ?></h1>
        <?php include "menu.php"; ?>
    </div>
    <div class="sidenav">
        <h1>Filters</h1>
        <?php include "sideMenu.php"; ?>
    </div>
    <div id="body">
        <div class="outer">
            <div class="middle">
                <div class="inner">
                    <h2>List of Items</h2>
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

                    echo "<table>";
                    
                    //execute the query
                    $result = $mysqli->query( $query );

                    //get number of rows returned
                    $num_results = $result->num_rows;
                    if( $num_results > 0){ //it means there's already at least one database record

                        while( $row = $result->fetch_assoc() ){

                            // THIS IS MY JSON CODE
                            $myJSON = json_encode($row);
                            //echo $myJSON;

                            extract($row);

                            echo "<tr>";
                            echo "        <td>{$name}</td>";
                            echo "        <td>{$cost}</td>";
                            echo "        <td>{$description}</td>";
                            echo "        <td>{$category}</td>";
                            echo "    </tr>";
                        }
                    }else{
                        //if database table is empty

                    }
                    //disconnect from database
                    $result->free();
                    $mysqli->close();

                    ?>  
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>