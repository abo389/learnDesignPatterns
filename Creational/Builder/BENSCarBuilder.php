<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENS;
use Creational\Builder\Models\Car;

class BENSCarBuilder implements CarBuilderInterface 
{
  private Car $type;
  function CreateCar()
  {
    $this->type = new BENS();
  }
  function AddEngin()
  {
    $this->type->setParts('engin', 'BENS engin');
  }
  function AddDoor()
  {
    $this->type->setParts('door', 'BENS door');
  }
  function AddBody()
  {
    $this->type->setParts('body', 'BENS body');
  }
  function AddWheel()
  {
    $this->type->setParts('wheel', 'BENS wheel');
  }
  function GetCar() : Car
  {
    return $this->type;
  }
}