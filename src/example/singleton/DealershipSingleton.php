<?php

class DealershipSingleton
{
  public static $instance;
  private array $storage = [];

  private function __construct() {}
  private function __wakeup() {}
  private function __clone() {}

  public static function getInstance(): self
  {
    if (!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getStorage(): array
  {
    return $this->storage;
  }

  public function setStorage(array $cars)
  {
    $this->storage = $cars;
  }
}