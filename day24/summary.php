<?php
require_once('./shared/database.php');
//the page listing product that user selected using 'Buy'
$db = new Database ();

$product = $db->getproduct($_POST['id']);

echo 'You are buying this: <br>'; 
echo'Name: ' . htmlspecialchars($product['name']) . '<br>'; 
echo'Price: ' . htmlspecialchars($product['price']) . '<br>';

?>

<h2>Add product to the cart</h2>
<form action="checkout.php" method="post">
<input type="hidden" name="id" value= "<?php echo htmlspecialchars($product['id']); ?>">
<input type="submit" value="Go to checkout">

</form>