<?php

namespace Creational\Pool;

use DateTime;

class Car 
{
  private $rentAt;

  function __construct()
  {
    $this->rentAt = new DateTime();
  }

  function moveCar() {
    return 'car is moving';
  }
}