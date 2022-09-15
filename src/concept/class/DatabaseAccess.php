<?php

class DatabaseAccess
{
  private static $instance;
  private static $connection = null;
  private $rows = [];

  private function __construct() {}
  private function __clone() {}
  private function __wakeup() {}

  public static function connect()
  {
    if (!self::$connection) {
      self::$connection = true;

      echo '[Database] > creating connection...'.PHP_EOL;  
    }
    
    echo '[Database] > connecting...'.PHP_EOL;
  }

  public static function getInstance(): self
  {
    if (!self::$instance) {
      self::$instance = new self();

      echo '[Database] > creating instance...'.PHP_EOL;  
    }

    self::connect();

    echo '[Database] > instancing...'.PHP_EOL;  

    return self::$instance;
  }

  public function setRows(array $rows)
  {
    $this->rows = array_merge($this->rows, $rows);
  }

  public function getRows(): array
  {
    return $this->rows;
  }

  public function findRow(int $index): array
  {
    $content = [];

    if (isset($this->rows[$index])) {
      $content = $this->rows[$index];
    }

    return $content;
  }
}