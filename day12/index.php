<?php

phpinfo ();
require 'functions.php';

$my_greeting = "Hello, world!";

print_greeting ();

$first_name="Natalia";
$surname="Kierczak";
$year_of_birth=1988;
$height=160;

define('MY_OS', 'windows');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <br>
  First name:  <?php echo $first_name;?><br>
  Surname:  <?php echo $surname;?><br>
  Year of birth:<?php echo $year_of_birth;?><br>
  Height: <?php echo $height;?><br>

  My OS is: <?php echo MY_OS;?>

  <?php 
  $celcius = -6;
  $fah = (9/5) * $celcius + 32;
  ?>
  <br>

  Temperature F: <?php echo  $fah;?>

  <?php
function print_is_even($number) 
{
$result = $number % 2 == 0 ? 'even' : 'odd';

echo $result;
}

$number_to_test = 14;
  ?>

  The number <?php echo $number_to_test;?> is <?php echo print_is_even($number_to_test); ?>
</body>
</html>
