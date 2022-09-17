<?php

class DealershipMonostate
{
  private static $storage = [];

  public function __construct() {}

  public function setStorage(array $storage)
  {
    self::$storage = $storage;
  }

  public function getStorage(): array
  {
    return self::$storage;
  }

  public function setCarColor(int $index, string $color)
  {
    $car = self::$storage[$index];
    $car->cor = $color;
    self::$storage[$index] = $car;
  }
}