<?php include 'header.php'; ?>

<?php 
//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "select id, name, cost, description, category
from items
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

//execute the query
$result = $mysqli->query( $query );

//get the result
$row = $result->fetch_assoc();

//assign the result to certain variable so our html form will be filled up with values
$id = $row['id'];
$name = $row['name'];
$cost = $row['cost'];
$description = $row['description'];
$category = $row['category']
?>

<h3>Update Details</h3>
<form id="form" action="update_item.php" method="post">
  <input type="hidden" name="id" value='<?php echo $id;  ?>'/>
  <label for="name">Name: </label>
  <input type="text" name="name" value='<?php echo $name;  ?>'/>
  <br>
  <label for="cost">Cost: </label>
  <input type="text" name="cost" value='<?php echo $cost;  ?>'/>
  <br>
  <label for="name">Description: </label>
  <input type="text" name="description" value='<?php echo $description;  ?>'/>
  <br>
  <label for="category">Category: </label>
  <select name="category">
    <option selected='<?php echo $category;  ?>'><?php echo $category;  ?></option>
    <option value="Heal">Heal</option>
    <option value="Damage">Damage</option>
    <option value="Buff">Buff</option>
    <option value="Debuff">Debuff</option>
    <option value="Unbuff">Unbuff</option>
  </select>
  <br>
  <input type="submit" value="Update Item">
</form>

<?php
//disconnect from database
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>