<?php
$course_name='Coding bootcamp';

$my_name='Natalia';

$result = 11-3;

$instructors= array (//or instead of array write []
    0 => 'Jan',
    1 => 'Daniel',
    2 => 'Michal',
    3 => 'Jakub'
);

function greet_me() {
    echo 'Good morning Prague';
}

greet_me();

$my_greeting = 'Good morning ' . $my_name;

echo $my_greeting;

sort ($instructors);

foreach ($instructors as $name)
{
echo greet_someone($name);
}

function greet_someone($name) {
    return 'Good morning '.$name;
}




