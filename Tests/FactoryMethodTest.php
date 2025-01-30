<?php

namespace Tests;

use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase 
{
  function test_can_build_BMW_brand() {
    $brandFactory = new BMWBrandFactory();
    $myBrand = $brandFactory->buildBrand();
    $this->assertInstanceOf(BMWBrand::class, $myBrand);
  }
  function test_can_build_BENZ_brand() {
    $brandFactory = new BENZBrandFactory();
    $myBrand = $brandFactory->buildBrand();
    $this->assertInstanceOf(BENZBrand::class, $myBrand);
  }

}