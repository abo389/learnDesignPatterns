<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase 
{
  function test_can_clone_automatic_protoType() {
    $automaticProtoTypeCar = new AutomaticCarProtoType();
    for ($i=0; $i < 5; $i++) { 
      $newCar = clone $automaticProtoTypeCar;
      $this->assertInstanceOf(AutomaticCarProtoType::class, $newCar);
    }
  }
  function test_can_clone_manual_protoType() {
    $manualProtoTypeCar = new ManualCarProtoType();
    for ($i=0; $i < 5; $i++) { 
      $newCar = clone $manualProtoTypeCar;
      $this->assertInstanceOf(ManualCarProtoType::class, $newCar);
    }
  }
}