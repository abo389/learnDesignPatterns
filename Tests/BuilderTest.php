<?php


namespace Tests;

use Creational\Builder\BENSCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BENS;
use Creational\Builder\Models\BMW;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase 
{
  function test_builder_can_produce_BMW_car() {
    $carBuilder = new BMWCarBuilder();
    $carProducer = new CarProducer($carBuilder);
    $myCar = $carProducer->ProduceCar();

    $this->assertInstanceOf(BMW::class, $myCar);
  }

  function test_builder_can_produce_BENS_car() {
    $carBuilder = new BENSCarBuilder();
    $carProducer = new CarProducer($carBuilder);
    $myCar = $carProducer->ProduceCar();

    $this->assertInstanceOf(BENS::class, $myCar);
  }

  function test_BENS_builder_return_array_of_data() {
    $carBuilder = new BENSCarBuilder();
    $carProducer = new CarProducer($carBuilder);
    $myData = $carProducer->ProduceCar()->getData();

    $this->assertIsArray($myData);
  }

  function test_BMW_builder_return_array_of_data() {
    $carBuilder = new BMWCarBuilder();
    $carProducer = new CarProducer($carBuilder);
    $myData = $carProducer->ProduceCar()->getData();

    $this->assertIsArray($myData);
  }
}