<?php

namespace Structural\Adapter;

class NormalEngine implements EngineInterface {
  function startEngine()
  {
    return 'start normal engine';
  }
}