<?php
require_once('var_show.php');
$variable='natalia';

$fruit = array(
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
);

$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>



<?php 


var_show($fruit);

$max_value = max ($fruit);
var_show($max_value);

$some_fruit=array_slice($fruit, 1, 2);
var_show($some_fruit);


$array=[]; // the same meaning as =array()
var_show($array);

$array []='first';
var_show($array);

$array []='second'; 
var_show($array);

$array ['my key']='my value'; 
var_show($array);

?>



</body>
</html>