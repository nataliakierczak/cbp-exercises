<?php $my_greeting = "Hello, world!";

echo $my_greeting; 

$my_number = 123;

echo $my_number;

echo $my_greeting;

$first_name = 'Natalia';
$last_name = 'Kierczak';
$year_of_birth = 1988;

define ('MY_CITY', 'Prague');

echo gettype(12.34);

?>

<body>
My first name is <?php echo $first_name?>; 
My last name is <?php echo $last_name?>; 
My year of birth is <?php echo $year_of_birth?>;

My city is <?php echo MY_CITY;?>

<br>

<?php $C=9;
$F = (9/5) * $C + 32;

?>
The current temepature in F is <?php echo $F;?>

<?php
function print_the_result($number)
{
$result = $number % 2 == 0 ? 'even': 'odd';
echo $result;
}
$number = 16;
?>
The number <?php echo $number?> is <?php echo print_the_result ($number); ?>

<?php $height=160;
if ($height > 180) {
    echo 'Tall';
}elseif ($height>160){
    echo 'Avarage';
}else {
    echo 'Short';}
?>


<?php $age=50;
if ($age>80) {
    echo 'old';
} elseif ($age<40) {
    echo 'young';
}else {
    echo 'middle-age';
}
?>

<?php $age=60;
if ($age < 10) {
    echo 'kid';
}elseif ($age<20) {
    echo 'teenager';
}elseif ($age<25) {
    echo 'student';
}else {
    echo 'adult';
}
?>

<?php 
switch ($age=60){
    case $age=10: 
        echo 'The value is not true';
    break;
    case $age=11:
    echo 'The value is true';
    break;
default: 
    echo 'different age';
}
?>

<?php switch ($OS='other'){
    case $OS = 'Windows':
    echo 'Use Edge';
    break;
    case $OS='Mac':
    echo 'Use Safari';
    break;
    default:
    echo 'Use Chrome';

}
?>

<?php 
$age=20;
$gender='female';
$employed=false;

if ($age>=60 &&$employed=true && $gender=='female') {} 
if (($gender=='male' && $age>20) || ($age>25 && $employed=false)) {}  ?>

<?php
$iterator=0;
while ($iterator<10) {
      echo $iterator;
    $iterator++;
  
}
?>

<?php 
$i=1;
do{
echo $i++;
} while ($i<10); 
?>

<?php
for ($i=0; $i<=10; $i++) {
    echo $i;
} ?>

<?php 
$i=0;
for ($i=0; $i<5; $i++) {
echo 'List number item is' . $i;
}
?>

<?php
$i=1;
for ($i=1; $i<=5; $i++) {
    echo 'List number item is' . $i;
}
?>

<?php
$i=1;
for ($i=10; $i>0; $i--){
     if ($i ==7 ) {
        continue;
    }
      echo $i;
      if ($i<=3) {
          break;
      }
    
}
?>

<?php
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

$cars_not_have = array_diff($cars_i_want, $cars_i_have);
print_r ($cars_not_have);

?>

<?php

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


$cars_i_dont_have = array_diff ($cars_i_want, $cars_i_have);
print_r ($cars_i_dont_have );

?>
<p>We will get <?php echo $cars_i_dont_have; ?> </p>

 <hr style="clear: both" />



<?php
$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);

foreach ($fruit_colors as $key => $color) {
    echo $color;
}
?>

<?php

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);


?>
<body>
<ol>
<?php foreach ($movies as $movie) :?>
<li>
<?php echo $movie;?>
</li>
<?php endforeach ;?>
</ol>
</body>

<body>
<ol>
<?php sort ($movies) ; ?>
<?php for($i=0;$i< count ($movies) ;$i++) :?>
<li>
<?php echo $movies[$i];?>
</li>
<?php endfor ;?>
</ol>
</body>

<br>
<hr>

<?php


$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);

?>

<body>
<ul>
<?php foreach ($movie_names as $key => $title) : ?>
<li>
<?php echo $title. ' ' .$movie_ratings[$key] ; ?>
</li>
<?php endforeach ;?>
</ul>
</body>

<?php


$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);

?>

<body>
<ol>
<?php asort ($movie_names); ?>
<?php foreach ($movie_names as $key => $title) : ?>
<li>
<?php echo $title. ' '.$movie_ratings[$key]; ?>
</li>
<?php endforeach ; ?>
</ol>
</body>

<?php
$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);


$merged_messages = array_merge ($new_messages);
print_r ($merged_messages);
?>

<body>
<?php foreach ($merged_messages as $type => $messages_of_type): ?>
    

        <?php echo $messages_of_type; ?><?php echo $message_text; ?>

    <?php endforeach ?>

</body>
