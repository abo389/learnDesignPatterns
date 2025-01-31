<?php

namespace Tests;

use Creational\Pool\Car;
use Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase 
{
  private $pool;
  protected function setUp(): void
  {
    parent::setUp();
    $this->pool = new CarPool();
  }

  function test_pool_can_rent_car() {
    $myCar = $this->pool->rentCar();

    $this->assertInstanceOf(Car::class, $myCar);
    $this->assertEquals(1,$this->pool->report()['busy']);
    $this->assertEquals(0,$this->pool->report()['free']);
  }

  function test_pool_can_return_busy_car() {
    $rentCar = $this->pool->rentCar();
    $msg = $this->pool->returnCar($rentCar);

    $this->assertEquals(0, $this->pool->report()['busy']);
    $this->assertEquals(1, $this->pool->report()['free']);
    $this->assertEquals('returned successfully', $msg);
  }

  function test_pool_cant_return_free_car() {
    $rentCar = $this->pool->rentCar();
          $this->pool->returnCar($rentCar);
    $msg = $this->pool->returnCar($rentCar);
    $this->assertEquals('car alredy free to use', $msg);
  }

  function test_pool_cant_return_unregistered_car() {
    $car = new Car;
    $msg = $this->pool->returnCar($car);
    $this->assertEquals('car is not registered :)', $msg);
  }
}