<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer 
{
  function __construct(private CarBuilderInterface $builder) { }
  function ProduceCar() : Car 
  {
    $this->builder->CreateCar();
    $this->builder->AddEngin();
    $this->builder->AddBody();
    $this->builder->AddDoor();
    $this->builder->AddWheel();
    return $this->builder->GetCar();
  }
}