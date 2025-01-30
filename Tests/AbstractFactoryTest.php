<?php

namespace Tests;

use Creational\AbstractFactory\BensCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase 
{
  function test_car_factory_can_create_BMW_car() {
    $carFactory = new CarAbstractFactory(200);
    $myCar = $carFactory->CreateBMWCar();

    $this->assertInstanceOf(BMWCar::class, $myCar);
  }

  function test_BMW_car_return_valid_price() {
    $carFactory = new CarAbstractFactory(200);
    $myCar = $carFactory->CreateBMWCar();

    $this->assertEquals($myCar->CalculatePrice(), 1200);
  }

  function test_Bens_car_return_valid_price() {
    $carFactory = new CarAbstractFactory(200);
    $myCar = $carFactory->CreateBensCar();

    $this->assertEquals($myCar->CalculatePrice(), 2200);
  }

  function test_car_factory_can_create_Bens_car() {
    $carFactory = new CarAbstractFactory(200);
    $myCar = $carFactory->CreateBensCar();

    $this->assertInstanceOf(BensCar::class, $myCar);
  }


}