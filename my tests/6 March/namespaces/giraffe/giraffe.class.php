<?php

/*--- write your code ONLY between here ---*/

  namespace giraffe;
  use animal;




  /*--- and here ---*/



class giraffe extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}