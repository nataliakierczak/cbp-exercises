<?php
require_once('../shared/database.php');

$db=new Database();
$products=$db->getproducts();


foreach($products as $product) {
    //presenting products from the database entered through the form 
    //'name' is the column from the database
    echo'Id: ' . htmlspecialchars($product['id']) . '<br>'; 
    echo'Name: ' . htmlspecialchars($product['name']) . '<br>'; 
    echo'Price: ' . htmlspecialchars($product['price']) . '<br>';
    echo'Size: ' . htmlspecialchars($product['size']) . '<br>';
    echo'Color: ' . htmlspecialchars($product['color']) . '<br><hr>';
}
?>
<a href="addproduct.php">Please add new products clicking on this link</a>