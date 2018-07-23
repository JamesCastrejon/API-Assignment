<?php 
//include database connection
include 'dbconfig.php';

//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "DELETE FROM items WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";

//execute query
if( $mysqli->query($query) ){
    //if successful deletion
    header("Location: data.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if there's a database problem
    echo "Database Error: Unable to delete record.";
}
//close database connection
$mysqli->close();
?>
