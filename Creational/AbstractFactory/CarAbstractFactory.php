<?php


namespace Creational\AbstractFactory;


class CarAbstractFactory {

  function __construct(private $price, private $tax = 1000)
  {
    
  }

  function CreateBMWCar () : BMWCar
  {
    return new BMWCar($this->price);
  }

  function CreateBensCar() : BensCar 
  {
    return new BensCar($this->price, $this->tax);
  }
}