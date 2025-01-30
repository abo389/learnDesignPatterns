<?php

namespace Creational\FactoryMethod;

class BENZBrandFactory implements BrandFactory
{
  function buildBrand()
  {
    return new BENZBrand;
  }
}