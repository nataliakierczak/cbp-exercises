<?php
require_once('./shared/database.php');
//the page listing product that user selected using 'Buy'
$db = new Database ();

if($_POST) {
    $order_id = $db->insertorder(1);
    //id- key of an array - array $_POSTcoming from the form sent by the post method
    $db->insertProductToOrder($_POST['id'], $order_id);
    header('Location:index.php');
}