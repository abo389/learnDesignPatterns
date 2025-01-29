<?php

namespace Creational\AbstractFactory;


class BMWCar implements CarInterface {

  public function __construct(private $price)
  {
    
  }

  public function CalculatePrice()
  {
    return $this->price + 1000;
  }
}