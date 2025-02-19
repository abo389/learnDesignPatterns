<?php

namespace Structural\Adapter;

class Car {
  function __construct (private EngineInterface $engine)
  {
    
  }

  function start() {
    return $this->engine->startEngine();
  }
}