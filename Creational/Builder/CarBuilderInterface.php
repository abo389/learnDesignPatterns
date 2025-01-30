<?php

namespace Creational\Builder;

interface CarBuilderInterface 
{
  function CreateCar();
  function AddEngin();
  function AddDoor();
  function AddBody();
  function AddWheel();
  function GetCar();
}