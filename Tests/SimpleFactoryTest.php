<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase 
{
  function test_factory_can_create_car() {
    $factory = new CarFactory();
    $myCar = $factory->createCar();
    $this->assertInstanceOf(Car::class, $myCar);
  }
}