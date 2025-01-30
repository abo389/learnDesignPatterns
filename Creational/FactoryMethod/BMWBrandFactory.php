<?php

namespace Creational\FactoryMethod;

class BMWBrandFactory implements BrandFactory {
  function buildBrand()
  {
    return new BMWBrand;
  }
}