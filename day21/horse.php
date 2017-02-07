<?php
require_once 'vehicle.php';

class horse extends vehicle
{
    protected $wheels_count = 0;

//has the horse been fed?
    protected $is_fed= false;

//fed the horse
    public function feed()
    {
        $is_fed
        $this->is_fed = true; //a property of this object
    }
}