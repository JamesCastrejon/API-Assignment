<?php include 'header.php'; ?>

<h3>Customer Details</h3>
<form id="form" action="add_item.php" method="post">
  <label for="name">Name: </label>
  <input type="text" name="name" />
  <br>
  <label for="cost">Cost: </label>
  <input type="text" name="cost" />
  <br>
  <label for="description">Description: </label>
  <input type="text" name="description" />
  <br>
  <label for="category">Category: </label>
  <select name="category">
    <option value="Heal">Heal</option>
    <option value="Damage">Damage</option>
    <option value="Buff">Buff</option>
    <option value="Debuff">Debuff</option>
    <option value="Unbuff">Unbuff</option>
  </select>
  <br>
  <input type="submit" value="Add Item">
</form>

<?php include 'footer.php'; ?>