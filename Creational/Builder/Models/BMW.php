<?php

namespace Creational\Builder\Models;

class BMW extends Car 
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