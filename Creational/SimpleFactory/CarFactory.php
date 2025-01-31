<?php

namespace Creational\SimpleFactory;

class CarFactory 
{
  function createCar($type='BMW') 
  {
    return new Car($type);
  }
}