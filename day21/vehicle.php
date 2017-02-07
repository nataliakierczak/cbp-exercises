<?php class vehicle
    {
     protected $wheels_count = null;

     protected $color = null;

     public $avg_speed = null;


//calculate the time to travel a specified distance at avarage speed
//@param float $distance - distance to travel in km
//@return float time to travel in hours
    public function travel($distance)
      {
          //to handle division by 0 (illegal operation)
          $avg_speed= max(1, $this->avg_speed); //return max value of 1 and $this->avg_speed
      return $distance / $avg_speed;
      }
    }

   