<?php

namespace Creational\FactoryMethod;

class BMWBrand implements CarBrand {
  function createBrand()
  {
    return 'BMW Brand';
  }
}