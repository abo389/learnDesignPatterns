<?php

namespace Structural\Adapter;

class EngineAdapter implements EngineInterface {

  private $engine;

  function __construct(TurboInterface $engine)
  {
    $this->engine = $engine;
  }


  function startEngine()
  {
    return $this->engine->startTurboEngine();
  }
}