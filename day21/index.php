<?php
require_once 'vehicle.php';
require_once 'car.class.php';
require_once 'horse.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class inheritance</title>
</head>
<body>
    <?php 
    $vehicle=new vehicle();
    var_dump($vehicle);
   
   $car = new car ();
  // $car->change_color('red');
   var_dump($car);

   $horse = new horse();
   var_dump($horse);

    var_dump ($car);
    ?>
</body>
</html>