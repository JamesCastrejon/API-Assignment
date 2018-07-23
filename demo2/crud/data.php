<?php include 'header.php'; ?>

<h3>List of Items</h3>

<table class="gridtable">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Cost</th>
    <th>Description</th>
    <th>Category</th>
    <th>Created</th>
    <th>Updated</th>
    <th></th>
    <th></th>
  </tr>
  <?php

//include database connection
include 'dbconfig.php';

//query all records from the database
$query = "select * from items";

//execute the query
$result = $mysqli->query( $query );

//get number of rows returned
$num_results = $result->num_rows;
if( $num_results > 0){ //it means there's already at least one database record

    //loop to show each records
    while( $row = $result->fetch_assoc() ){

        //this will make $row['firstname'] to
        //just $firstname only
        extract($row);

        //creating new table row per record
        echo "<tr>";
        echo "        <td>{$id}</td>";
        echo "        <td>{$name}</td>";
        echo "        <td>{$cost}</td>";
        echo "        <td>{$description}</td>";
        echo "        <td>{$category}</td>";
        echo "        <td>{$created}</td>";
        echo "        <td>{$updated}</td>";
        echo "        <td><a href='edit.php?id={$id}'>Edit</a></td>";
        echo "        <td><a href='delete_item.php?id={$id}'>Delete</a></td>";
        echo "    </tr>";
    }

}else{
    //if database table is empty

}
//disconnect from database
$result->free();
$mysqli->close();

?>  

</table>
  <p>
    <div id="menu">
      <a href="create.php">Add new Item</a>
    </div>
  </p>
  
<?php include 'footer.php'; ?>