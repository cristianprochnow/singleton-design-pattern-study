<?php

class Carro
{
  public int $ano;
  public string $modelo;
  public string $marca;

  public function __construct(int $ano, string $marca, string $modelo)
  {
    $this->ano = $ano;
    $this->marca = $marca;
    $this->modelo = $modelo;
  }
}