<?php

namespace Creational\StaticFactory;

class StaticFactory
{
  static function factory($type) 
  {
    if($type === "BMW") return new BMWCar();
    if($type === "BENZ") return new BENZCar();
    return null;
  }
}