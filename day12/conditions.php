<?php 
$height = 155;
if ($height > 180)
{
    echo 'tall';
}
elseif ($height > 160)
{
    echo 'avarage';
}
else
{
    echo 'small';
} 
?>

<?php 
$height = 179;
if ($height > 180)
{
    echo 'tall';
}
elseif ($height > 160)
{
    echo 'avarage';
}
else
{
    echo 'small';
} 
?>

<?php 

$color='red';
switch ($color)
{
    case 'blue':
    //this will not run for 'red'
    break;
    case 'red':
    //this will run for 'red'
    break;
    case 'yellow':
    //this will noe run for 'red'
    break;
    default:
    //this will run of no other case statement runs
    break;
}

/*
switch(value) {
    case value_1:
    // code to run when value == value_1
    break; // mandatory
    case value_2:
    // code to run when value == value_2
    break;
    case value_3:
    // code to run when value == value_3
    break;
    ...
    default:
    // code to run when none of the previous conditions are true
    break;
}
*/
?>

<?php 

switch(MY_OS)
{
    case 'windows':
    echo 'edge';
    break;
    case 'linux':
    echo 'firefox';
    break;
    case 'mac':
    echo 'safari';
    break;
    default:
    echo 'just use chrome';
    break;
}
?>


<?php
$age=29;
$gender="female";
$employed=false;

if ($age > 35) {}
if ($employed==true) {} // OR write if ($employed)
if ($age <= 18) {}
if ($age < 12 && $gender=="female") {}
if ($age >= 18 && $employed=false){} //OR !$employed
if ($age >= 60 && $employed=true && $gender=="female" {}
if (($gender=="male" && $age > 20) || ($employed=false; && $gender=="female" && $age>25))
?>



