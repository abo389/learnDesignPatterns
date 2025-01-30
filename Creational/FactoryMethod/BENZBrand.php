<?php

namespace Creational\FactoryMethod;


class BENZBrand implements CarBrand 
{
  function createBrand()
  {
    return 'BENZ Brand';
  }
}