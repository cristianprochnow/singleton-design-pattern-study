<?php

class ConcessionariaMonostate
{
  private static $carros = [];

  public function preencheEstoque(array $carros)
  {
    self::$carros = array_merge(self::$carros, $carros);
  }

  public function pegarEstoque(): array
  {
    return self::$carros;
  }
}