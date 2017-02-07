<?php
class car 
{
private $color=null;

private $manufacturer = null;

public $model = null;

public $price = null;

public $nr_of_wheels = 4;

public $fuel_type = 'petrol';

public $tire_type = null;

public $owner = 'manufacturer';

public $current_speed = 0;

public function __construct($color, $manufacturer, $model) 
{
    $this->color = $color;
    $this->manufacturer = $manufacturer;
    $this->model = $model;
}

public function speed_up()
{
$this->current_speed += 10;
}
public function drive ()
{

}
public function brake()
{
$this->current_speed -= 10;
}
public function get_stolen()
{
$this->owner = 'chop-shop';
}
public function be_bought($new_owner)
{
$this->owner = $new_owner;
}

// get method for the manufacturer property
public function getManufacturer() 
{
    //this function is within class so it has access to the private property
return $this-> manufacturer;
}

public function setManufacturer($manufacturer)
{
    $this->manufacturer = $manufacturer;
}
public function getColor ()
{
    return $this->color;
}
public function setColor ($color)
{
     $this->color = $color;
}
}

//no care was made yet

//a new car is created
$new_car = new car('red', 'Skoda', 'Favorit'); // a new car is created
//$new_car->manufacturer = 'Skoda'; // it got the manufacturers mark
$new_car->model = 'Favorit'; //ut got its model 

$new_car->price = 400000; //the car is given a price
//$new_care->price = 10; //the car is on sale

$new_car->be_bought('Natalia'); //I buy the curl_setopt_array
$new_car->speed_up();
$new_car->speed_up();
$new_car->speed_up();
$new_car->speed_up(); //I speed up to 40 km/hour

$new_car->brake();
$new_car->brake();
$new_car->brake();
$new_car->brake(); //car tops

$new_car->get_stolen();

$new_car->nr_of_wheels = 0; //the wheels are chopped off


//$my_car=new car ('red');




