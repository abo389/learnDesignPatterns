<?php

namespace Tests;

use Creational\StaticFactory\BENZCar;
use Creational\StaticFactory\BMWCar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase 
{
  function test_static_factory_can_create_BMW_car() 
  {
    $this->assertInstanceOf(BMWCar::class, StaticFactory::factory('BMW'));
  }

  function test_static_factory_can_create_BENZ_car() 
  {
    $this->assertInstanceOf(BENZCar::class, StaticFactory::factory('BENZ'));
  }
}