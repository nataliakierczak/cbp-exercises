<?php
require_once './shared/user.php';
require_once ('./shared/database.php');

$db=new Database();
$user= new User($db);

$name=$user->getName();
if($name){
    echo "Hello dear user ".htmlspecialchars($user->getName());
    echo '<br><a href="logout.php">Logout</a>';
     echo '<br><a href="summary.php">Summary</a>';
    //number of products in the cart
    echo "<br>Products in your cart " .count($_SESSION['products']);
    } else {
       echo '<a href="login.php">logout</a>';
          echo '<a href="form.php">logout</a>';
}




