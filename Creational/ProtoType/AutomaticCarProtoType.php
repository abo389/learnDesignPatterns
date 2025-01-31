<?php

namespace Creational\ProtoType;

class AutomaticCarProtoType extends AbstractCarProtoType
{
  protected $model = 'Automatic';
  function __clone() {}
}