<?php

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Car;
use Structural\Adapter\EngineAdapter;
use Structural\Adapter\NormalEngine;
use Structural\Adapter\TurboEngine;

class AdapterTest extends TestCase {
  function test_car_start_normal_engine() {
    $engine = new NormalEngine();
    $car = new Car($engine);

    $this->assertEquals('start normal engine', $car->start());
  }

  function test_car_start_turbo_engine() {
    $turbo = new TurboEngine();
    $adapter = new EngineAdapter($turbo);
    $car = new Car($adapter);

    $this->assertEquals('start turbo engine', $car->start());
  }
}