<?php
session_start();
require_once('./database.php');
//the page listing product that user selected using 'Buy'
$db = new Database ();


if($_POST) {
  try{  $db->beginTransaction();
    $order_id = $db->insertorder($_SESSION['userid']);
    foreach($_SESSION['products'] as $id){
        $db->insertproducttoorder($id, $order_id);
    }
    $db->commitTransaction();
    $stored=1;
    } catch(PDOException $e){
        $db->rollBackTransaction();
        $stored=0;
    }
    $_SESSION['products']=[];  
    header('Location:index.php?status=' . $stored);
}