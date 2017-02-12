<?php

class giraffe extends animal
{
    public static $list_of_giraffes = array();

    public static function getNumberOfGiraffes()
    {
        return count(static::$list_of_giraffes);
    }

    public static function getNumberOfGiraffesAtLocation($location)
    {
         $number =0;
        foreach(static::$list_of_giraffes as $giraffe)
        {
            if($giraffe->location == $location)
            {
                $number++;
            }
        }
        return $number;
    }
   

    public $is_thirsty = true;

    public $is_hungry =true;

    public $name = 'Micky';

    public $surname = 'Bu';

    public $location = 'forest'; //default value - newborn giraffe is in the forest

//every time a new giraffe is created - one giraffe added to number of giraffes
    public function __construct($name, $location = 'forest')
    {
        //taking this object we just created and saving in in the static array - storring the giraffes in the list of giraffes
        static::$list_of_giraffes[] = $this;

        //set the name the giraffe was born with
        //property  //variable
        $this->name = $name;

        //sets the location where it was born as its current location
        $this->location = $location;

        //increases the global numberr of giraffes
      //  static::$number_of_giraffes +=1;


    }
    public function canItFly()
    {
        if($this->can_fly)
        {
            echo 'It can fly';
        }
        else 
        {
            echo 'It cannot fly :(';
        }
    }

    public function drink()
    {
        if($this->location == 'pond')
        {
            $this->is_thirsty = false;
        }
        else
        {
            echo 'Nothing to drink here';
        }
        $this->$is_thirsty = false;
    }
    public function eat()
    {
         if($this->location == 'forest')
        {
            $this->is_hungry = false;
        }
        else
        {
            echo 'Nothing to eat here';
        }
        $this->$is_hungry = false;
    }
    public function sleep()
    {
        $this->$is_thirsty = true;
        $this->$s_hungry= true;
    }
    public function goToLocation($location)
    {
        $this->location = $location;
    }

    //deprecated
    public function go_to_forest ()
    {
        $this->goToLocation('forest');
    }
        //deprecated
      public function go_to_pond ()
    {
         $this->goToLocation('pond');
    }
    public function getLocationName()
    {
        switch($this->location)
        {
             case'forest':
             return 'in the forest';
             break;
             case 'pond':
            return 'by the pond';
            break;
            case'zoo':
             return 'at the ZOO';
             break;
            default: 
            'lost';
            break;
        }
       
    }
    //magicla function when converting object to string - should return a string value
    public function __toString()
    {
        return $this->name . ' ' .$this->surname;
    }
}