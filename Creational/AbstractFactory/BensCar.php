<?php

namespace Creational\AbstractFactory;

class BensCar implements CarInterface {

  function __construct(private $price, private $tax)
  {
    
  }

  public function CalculatePrice()
  {
    return $this->price + $this->tax + 1000;
  }
}