<?php

require_once('./shared/database.php');

//the page listing product that user selected using 'Buy'
$db = new Database ();
session_start();
foreach($_SESSION['products'] as $id){
$product = $db->getproduct($id);

echo 'You are buying this: <br>'; 
echo'Name: ' . htmlspecialchars($product['name']) . '<br>'; 
echo'Price: ' . htmlspecialchars($product['price']) . '<br>';
echo '<hr>';
}
?>

<h2>Add product to the cart</h2>
<form action="checkout.php" method="post">
<input type="submit" value="Go to checkout" name="submit">

</form>

