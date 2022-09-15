<?php

class DealershipStandard
{
  private array $storage = [];

  public function getStorage(): array
  {
    return $this->storage;
  }

  public function setStorage(array $cars)
  {
    $this->storage = $cars;
  }
}