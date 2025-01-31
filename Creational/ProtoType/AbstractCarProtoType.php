<?php

namespace Creational\ProtoType;

abstract class AbstractCarProtoType 
{
  protected $model;
  private $flag;
  abstract function __clone();
  function getFlag() 
  {
    return $this->flag;
  }
  function setFlag($flag) 
  {
    $this->flag = $flag;
  }
}