<?php

class DealershipStandard
{
  private array $storage = [];

  public function __construct() {}

  public function getStorage(): array
  {
    return $this->storage;
  }

  public function setStorage(array $cars)
  {
    $this->storage = $cars;
  }

  public function setCarColor(int $index, string $color)
  {
    $car = $this->storage[$index];
    $car->cor = $color;
    $this->storage[$index] = $car;
  }
}