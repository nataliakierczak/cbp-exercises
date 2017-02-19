<?php
session_start();
//index- file for the users to select products
require_once('./shared/database.php');
$db=new Database();
$products = $db->getproducts();

if($_POST){
    if(!isset($_SESSION['products'])){
        $_SESSION['products']= [];
    }
    $_SESSION['products'][] = $_POST['id'];
    header('Location: index.php');
}

require './shared/header.php';
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
    echo '<form action="" method="post">'
    . '<input type="hidden" name="id" value=" ' . htmlspecialchars($product['id']) . '">'
    . ' <input type="submit" value="Buy this">'
    . '</form><hr>';
}
?>




