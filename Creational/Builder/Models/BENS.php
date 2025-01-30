<?php

namespace Creational\Builder\Models;

class BENS extends Car
{
  private $data = [];
  function setParts($name, $value)
  {
    $this->data[$name] = $value;
  }

  function getData() : array
  {
    return $this->data;
  }
}
