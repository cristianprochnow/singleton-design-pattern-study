<?php

class ConcessionariaSingleton
{
  private static $instance;
  private $carros = [];

  public static function getInstance(): self
  {
    if (!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function preencheEstoque(array $carros)
  {
    $this->carros = array_merge($this->carros, $carros);
  }

  public function pegarEstoque(): array
  {
    return $this->carros;
  }
}