<?php
require_once('../shared/database.php');
//cross check whether the form is submitting something
if($_POST) {
   $db = new Database();
   $db->insertproduct($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']);
    header('Location: products.php');
}
?>

<h2>Add product</h2>
<form action="" method="post">
Name:
<br>
<input type="text" name="name"> <br>
Price:
<br>
<input type="text" name="price">  <br>
Size:
<br>
<input type="text" name="size"> <br>
Color:
<br>
<input type="text" name="color"> <br>
<input type="submit">
</form>

<a href="products.php">See an overview of all available products</a>