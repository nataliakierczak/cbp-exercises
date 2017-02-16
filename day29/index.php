<?php
session_start();
//index- file for the users to select products
require_once('./shared/database.php');
$db=new Database();
$products = $db->getproducts();

echo htmlspecialchars($db->getuser($_SESSION['userid'])['name']);
?>
<h1>Page for users to select products</h1>
<?php
foreach($products as $product) {
    //presenting products from the database entered through the form 
    //'name' is the column from the database
    echo'Name: ' . htmlspecialchars($product['name']) . '<br>'; 
    echo'Price: ' . htmlspecialchars($product['price']) . '<br>';
    echo'Size: ' . htmlspecialchars($product['size']) . '<br>';
    echo'Color: ' . htmlspecialchars($product['color']) . '<br><hr>';
    echo '<form action="summary.php" method="post">'
    . '<input type="hidden" name="id" value=" ' . htmlspecialchars($product['id']) . '">'
    . ' <input type="submit" value="Buy this">'
    . '</form><hr>';
}
?>
