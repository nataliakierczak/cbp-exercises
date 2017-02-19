<?php
session_start();
require_once('./shared/database.php');
//the page listing product that user selected using 'Buy'
$db = new Database ();


if($_POST) {
    $order_id = $db->insertorder($_SESSION['userid']);
    foreach($_SESSION['products'] as $id){
        $db->insertproducttoorder($id, $order_id);
    }
    $_SESSION['products']=[];  
    header('Location:index.php');
}