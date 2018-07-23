<?php

//include database connection
include 'dbconfig.php';

//write our update query
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection

$query = "update items
set
name = '".$mysqli->real_escape_string($_POST['name'])."',
cost = '".$mysqli->real_escape_string($_POST['cost'])."',
description = '".$mysqli->real_escape_string($_POST['description'])."',
category = '".$mysqli->real_escape_string($_POST['category'])."'
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

//execute the query
if( $mysqli->query($query) ) {

    //if updating the record was successful
    header("Location: data.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();

}else{
    //if unable to update new record
    echo "Database Error: Unable to update record.";
}
//close database connection
$mysqli->close();
?>