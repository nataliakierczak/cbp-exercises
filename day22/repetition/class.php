<?php
class dog
{
  public $color = 'unspecified';

  public static $nr_of_dogs = 0; //after twe create a new object - increased by 1

  public function bark()
  {
    echo "WOOF!";
  }

  public static function get_nr_of_dogs()
  {
    return static::$nr_of_dogs;
  }

  public function __construct()
  {
    static::$nr_of_dogs++; //increasing number of dog by 1, part of the class
  }

  public function __destruct()
  {
    static::$nr_of_dogs--;
  }
}

$my_dog = new dog(); // dog::$nr_of_dogs increased by 1; every time we create a new object-construct function is run 

// because it's public I can access the static property from anywhere
echo dog::$nr_of_dogs;

unset($my_dog);
