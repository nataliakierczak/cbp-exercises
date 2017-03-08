<?php

/*--- write your code ONLY between here ---*/

namespace elephant;
  use animal;


/*--- and here ---*/




class elephant extends animal
{
  public function feed()
  {
    $food = new food();

    $this->stomach[] = $food;
  }
}