<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMW;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{
  private Car $type;
  function CreateCar()
  {
    $this->type = new BMW();
  }
  function AddEngin()
  {
    $this->type->setParts('engin', 'BMW engin');
  }
  function AddDoor()
  {
    $this->type->setParts('door', 'BMW door');
  }
  function AddBody()
  {
    $this->type->setParts('body', 'BMW body');
  }
  function AddWheel()
  {
    $this->type->setParts('wheel', 'BMW wheel');
  }
  function GetCar() : Car
  {
    return $this->type;
  }
}