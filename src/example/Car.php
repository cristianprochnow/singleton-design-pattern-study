<?php

class Car
{
  public string $marca;
  public string $modelo;
  public int $ano;
  public string $cor;

  public function __construct(string $marca, string $modelo, int $ano, string $cor)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->cor = $cor;
  }
}