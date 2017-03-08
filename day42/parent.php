<?php

class animal 
{
public function sleep() 
{
echo 'Falls asleep';
}
}

class cat extends animal 
{
public function sleep()
{
echo 'Purrs';

parent::sleep(); //prints 'Falls asleep'
}
}

$$oliver= new cat();
$oliver->sleep(); // it only purrs if there is no parent, if there is parent - does both



