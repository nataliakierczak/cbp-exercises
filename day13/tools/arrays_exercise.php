<?php

require_once('var_show.php');

$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
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

$cars_i_do_not_have = array_diff ($cars_i_want, $cars_i_have);
var_show ($cars_i_do_not_have);

shuffle($cars_i_do_not_have);
var_show($cars_i_do_not_have);

$random_cars_i_will_buy=array_shift($cars_i_do_not_have);
    ?>
</body>
</html>