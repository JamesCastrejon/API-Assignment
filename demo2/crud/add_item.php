<?php
echo $_POST['name'] + '<br>';
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "insert into items
    set
    name = '".$mysqli->real_escape_string($_POST['name'])."',
    cost = '".$mysqli->real_escape_string($_POST['cost'])."',
    description  = '".$mysqli->real_escape_string($_POST['description'])."',
    category  = '".$mysqli->real_escape_string($_POST['category'])."'";

//execute the query
if( $mysqli->query($query) ) {
    //if saving success
    header("Location: data.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to create record.";
}

//close database connection
$mysqli->close();
?>
