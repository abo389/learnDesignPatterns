<?php

namespace Creational\ProtoType;

class ManualCarProtoType extends AbstractCarProtoType 
{
  protected $model = 'Manual';
  function __clone() {}
}