<?php

namespace Creational\Pool;

class CarPool 
{
  private $freeCars = [];
  private $busyCars = [];

  function rentCar() : Car {
    if(count($this->freeCars) == 0) 
    {
      $car = new Car;
    } 
    else 
    {
      $car = array_pop($this->freeCars);
    }
    $this->busyCars[spl_object_hash($car)] = $car;

    return $car;
  }

  function returnCar(Car $car) : string {
    $carId = spl_object_hash($car);
    if(isset($this->busyCars[$carId])) 
    {
      unset($this->busyCars[$carId]);
      $this->freeCars[$carId] = $car;
      return 'returned successfully';
    }
    elseif(isset($this->freeCars[$carId]))
    {
      return 'car alredy free to use';
    }
    else 
    {
      return 'car is not registered :)';
    }
  }

  function report() : array {
    return [
      'free' => count($this->freeCars),
      'busy' => count($this->busyCars)
    ];
  }
}